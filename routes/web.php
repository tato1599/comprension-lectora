<?php

use App\Http\Controllers\ActivitiesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registrarse', function () {
    return view('auth.register');
})->name('register');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/actividades', function () {
        return view('activities');
    })->name('activities');
    Route::middleware(['role:docente'])->get(ActivitiesController::class, function () {
        return view('crear-actividad');
    })->name('crearActividad');
    Route::middleware(['role:administrador'])->get('/admin', function () {
        return view('admin');
    })->name('admin');
    Route::get('/grupos', function () {
        return view('groups');
    })->name('groups');
    Route::middleware(['role:docente'])->get('/grupos/crear', function () {
        return view('groups-create');
    })->name('groups.create');
    Route::middleware(['role:docente'])->get('/grupos/{id}', function () {
        return view('groups-show');
    })->name('groups.show');
});
