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
     * @param array $options
     * @return array
     */
    public function generateResponse(string $prompt, array $options = []): array
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('OLLAMA_API_KEY'),
                'Content-Type' => 'application/json',
            ])->post("{$this->baseUrl}/generate", [
                'prompt' => $prompt,
                'options' => $options,
            ]);

            if ($response->successful()) {
                return $response->json();
            }

            return [
                'error' => 'API Error',
                'message' => $response->body(),
            ];
        } catch (\Exception $e) {
            return [
                'error' => 'Exception',
                'message' => $e->getMessage(),
            ];
        }
    }
}
