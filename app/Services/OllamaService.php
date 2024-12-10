<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class OllamaService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = env('OLLAMA_API_URL'); // URL base de la API de Ollama
    }

    /**
     * Realiza una consulta a Ollama.
     *
     * @param string $prompt
     * @return array
     */
    public function generateResponse(string $prompt)
    {
        try {
            // Enviar la solicitud con los datos JSON
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post($this->baseUrl, [
                'model' => 'llama3.2',
                'prompt' => $prompt,
                'stream' => false,
            ]);

            // Verificar si la respuesta es exitosa
            if ($response->successful()) {
                return $response->json(); // Decodificar automáticamente el JSON
            }

            // Manejo de errores de API
            return [
                'error' => 'API Error',
                'message' => $response->body(),
            ];
        } catch (\Exception $e) {
            // Manejo de excepciones
            return [
                'error' => 'Exception',
                'message' => $e->getMessage(),
            ];
        }
    }
}
