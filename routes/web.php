<?php

use App\Livewire\ComprensionLectora;
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

Route::get('/prueba', [ComprensionLectora::class, 'render']);

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
    // Ruta del panel de administrador protegida por el middleware 'role'

    Route::middleware(['role:administrador'])->get('/admin', function () {
        return view('admin');
    })->name('admin');
    Route::middleware(['role:docente'])->get('/grupos', function () {
        return view('groups');
    })->name('groups');
});
