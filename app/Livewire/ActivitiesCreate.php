<?php

namespace App\Livewire;

use App\Models\Activitie;
use App\Services\OllamaService;
use Livewire\Component;

class ActivitiesCreate extends Component
{
    public $activityText; // Para almacenar el texto ingresado por el usuario
    public $questions = []; // Para almacenar las preguntas generadas
    public $activity;

    public function render()
    {
        return view('livewire.activities-create');
    }

    public function store()
    {
        // Validar que el texto no esté vacío
        if (empty($this->activityText)) {
            session()->flash('error', 'El texto de la actividad no puede estar vacío.');
            return;
        }

        $prompt = "Genera preguntas relacionadas con el siguiente texto en formato JSON. Devuelve un arreglo con preguntas, sin explicaciones ni encabezados, con un máximo de 5 preguntas, son preguntas dirigidas a universitarios, las preguntas tienen el objetivo de medir la compresion lectora, es decir,en base al texto se tiene que comprobar que el lector presto atencion al texto: {$this->activityText}";

        $ollamaService = new OllamaService();
        $response = $ollamaService->generateResponse($prompt);

        // Manejo de la respuesta
        if (isset($response['error'])) {
            session()->flash('error', $response['message']);
        } else {
            try {
                // Decodificar el JSON de la respuesta
                $decodedResponse = json_decode($response['response'], true);

                if (json_last_error() === JSON_ERROR_NONE && is_array($decodedResponse)) {
                    $this->questions = $decodedResponse; // Asignar las preguntas directamente

                    // Crear la actividad en la base de datos
                    Activitie::create([
                        'titulo' => 'Nueva Actividad', // Puedes personalizar esto
                        'descripcion' => 'Actividad generada automáticamente', // También puedes personalizarlo
                        'texto' => $this->activityText,
                        'docente_id' => auth()->id(), // Suponiendo que el docente está autenticado
                        'grupo_id' => 1, // Reemplaza con el ID real del grupo
                        'categoria' => 'Lectura', // Puedes definir una categoría fija o variable
                        'preguntas' => $this->questions,
                    ]);

                    session()->flash('success', 'Actividad creada exitosamente.');
                } else {
                    session()->flash('error', 'La respuesta de la API no tiene un formato válido.');
                }
            } catch (\Exception $e) {
                session()->flash('error', 'Error al procesar la respuesta: ' . $e->getMessage());
            }
        }
    }

}
