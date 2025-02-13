<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

Route::get('/', [UsuariosController::class, 'portada'])->name('usuarios.portada');

Route::get('/inicio', [UsuariosController::class, 'inicio'])->name('usuarios.inicio');
Route::post('/inicio/iniciarSesion', [UsuariosController::class, 'iniciarSesion'])->name('iniciarSesion');
Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('/registrarse', [UsuariosController::class, 'mostrarFormularioRegistro'])->name('usuarios.registrarse');
Route::post('/registrarse', [UsuariosController::class, 'registrarUsuario'])->name('usuarios.registrar');
