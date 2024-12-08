<?php

namespace App\Livewire;

use App\Models\GruposUsuarios;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\Facades\Rule;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class GrupoUsuariosTable extends PowerGridComponent
{
    public string $tableName = 'grupo-usuarios-table-gok1ek-table';

    public function setUp(): array
    {

        return [
            PowerGrid::header()
                ->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return GruposUsuarios::query()->with('grupo', 'usuario');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('nombre_usuario' , fn($row) => $row->usuario->name)
            ->add('correo_usuario', fn($row) => $row->usuario->email)
            ->add('rol')
            ->add('estado')
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            Column::action('Action'),
            Column::make('Nombre', 'nombre_usuario')
                ->sortable()
                ->searchable(),
            Column::make('Correo', 'correo_usuario')
                ->sortable()
                ->searchable(),
            Column::make('Rol', 'rol')
                ->sortable()
                ->searchable(),

            Column::make('Estado', 'estado')
                ->sortable()
                ->searchable(),


        ];
    }

    public function filters(): array
    {
        return [
        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert('.$rowId.')');
    }

    public function actions(GruposUsuarios $row): array
    {
        return [
            Button::add('edit')
                ->slot('Desvincular')
                ->id()
                ->class('bg-color-6 rounded-md text-white p-2')
                ->dispatch('edit', ['rowId' => $row->id])
        ];
    }

    public function actionRules($row): array
    {
        return [

            Rule::button('edit')
                ->when(fn($row) => $row->id_usuario === auth()->id())
                ->hide(),

        ];
    }

}
