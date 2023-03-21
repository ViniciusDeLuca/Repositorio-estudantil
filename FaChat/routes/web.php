<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MantenedorController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthLogado;

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
// Rotas de login e cadastro
Route::get('login', [LoginController::class, 'redirecionarLogin'])->name('login');
Route::get('logar', [LoginController::class, 'logar'])->name('logar');
Route::get('cadastro', [LoginController::class, 'redirecionarCadastro'])->name('redirecionarCadastro');
Route::post('cadastrar', [LoginController::class, 'cadastrar'])->name('cadastrar');

//login de mantenedor
Route::get('mantenedor/login', [LoginController::class, 'redirecionarLoginMantenedor'])->name('redirecionarLoginMantenedor');
Route::get('mantenedor/logar', [LoginController::class, 'logarMantenedor'])->name('logarMantenedor');

Route::prefix('mantenedor')->middleware('AuthMantenedor')->group(function () {
    Route::get('', [MantenedorController::class, 'index'])->name('index');
});

Route::middleware('AuthLogado')->group(function () {
    Route::get('', [InicioController::class, 'redirecionarInicio'])->name('inicio');
});