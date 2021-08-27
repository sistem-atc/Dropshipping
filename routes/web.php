<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menus', [HomeController::class, 'menus'])->name('menus');
Route::get('/cadastroAdministradores', [HomeController::class, 'cadastroA'])->name('cadastroA');
Route::get('/cadastroProdutos', [HomeController::class, 'cadastroP'])->name('cadastroP');
Route::get('/cadastroSellers', [HomeController::class, 'cadastroS'])->name('cadastroS');
Route::get('/relatorioVendas', [HomeController::class, 'relatov'])->name('relatov');
Route::get('/pedidos', [HomeController::class, 'pedidos'])->name('pedidos');
Route::get('/estoque', [HomeController::class, 'estoque'])->name('estoque');
Route::get('/anuncios', [HomeController::class, 'anuncios'])->name('anuncios');
Route::get('/mensagensSellers', [HomeController::class, 'atendimentosSellers'])->name('atendimentosSellers');
Route::get('/mensagensMercadoLivre', [HomeController::class, 'atendimentosML'])->name('atendimentosML');
Route::get('/register', [HomeController::class, 'register'])->name('register');

Route::post('/cadastroAdministradores', [HomeController::class, 'store'])->name('cadastraAdmin');
Route::post('/cadastroEmpresas', [HomeController::class, 'companies'])->name('cadastroEmpresas');