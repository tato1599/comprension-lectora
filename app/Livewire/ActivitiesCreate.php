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
    public $groupId;

    public function mount($groupId)
{
    $this->groupId = $groupId; // Obtener el ID del grupo desde la URL
}

    public function render()
    {
        return view('livewire.activities-create');
    }

    public function generateQuestions()
    {
        if (empty($this->activityText)) {
            session()->flash('error', 'El texto de la actividad no puede estar vacío.');
            return;
        }

        $prompt = "Genera preguntas relacionadas con el siguiente texto en formato JSON. Devuelve un arreglo con preguntas, sin explicaciones ni encabezados, con un máximo de 5 preguntas. Son preguntas dirigidas a universitarios, diseñadas para medir la comprensión lectora y evaluar la atención al texto: {$this->activityText}";

        $ollamaService = new OllamaService();
        $response = $ollamaService->generateResponse($prompt);

        if (isset($response['error'])) {
            session()->flash('error', $response['message']);
        } else {
            try {
                $decodedResponse = json_decode($response['response'], true);

                if (json_last_error() === JSON_ERROR_NONE && is_array($decodedResponse)) {
                    $this->questions = $decodedResponse; // Almacenar las preguntas generadas
                } else {
                    session()->flash('error', 'La respuesta de la API no tiene un formato válido.');
                }
            } catch (\Exception $e) {
                session()->flash('error', 'Error al procesar la respuesta: ' . $e->getMessage());
            }
        }
    }

    public function saveActivity()
    {
        try {
            Activitie::create([
                'titulo' => $this->activity,
                'descripcion' => 'Actividad generada automáticamente',
                'texto' => $this->activityText,
                'docente_id' => auth()->id(),
                'grupo_id' => $this->groupId,
                'categoria' => 'Lectura',
                'preguntas' => $this->questions,
            ]);

            //regresar a la vista del grupo
            return redirect()->route('groups.show', $this->groupId);
        } catch (\Exception $e) {
            session()->flash('error', 'Error al guardar la actividad: ' . $e->getMessage());
        }
    }
}
