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
Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'redirecionarLogin')->name('login');
    Route::get('logar', 'logar')->name('logar');
    Route::get('cadastro', 'redirecionarCadastro')->name('redirecionarCadastro');
    Route::post('cadastrar', 'cadastrar')->name('cadastrar');
    Route::get('logout', 'logout')->name('logout');
});

//login de mantenedor
Route::get('mantenedor/login', [LoginController::class, 'redirecionarLoginMantenedor'])->name('redirecionarLoginMantenedor');
Route::get('mantenedor/logar', [LoginController::class, 'logarMantenedor'])->name('logarMantenedor');

Route::prefix('mantenedor')->middleware('AuthMantenedor')->group(function () {
    Route::get('', [MantenedorController::class, 'index'])->name('index');
});

Route::middleware('AuthLogado')->controller(InicioController::class)->group(function () {
    Route::get('', 'redirecionarInicio')->name('inicio');
    Route::get('publicacao/{id}', 'publicacao')->name('redirecionarPublicacao');
    Route::get('cadastrarPublicacao', 'redirecionarCadastroPublicacao')->name('redirecionarCadastroPublicacao');
    Route::post('publicacao/salvar', 'cadastrarPublicacao')->name('cadastrarPublicacao');
});