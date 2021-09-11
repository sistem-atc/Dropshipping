<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnunciosController;
use App\Http\Controllers\AtedimentoController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\MeliController;

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

Route::get('/anuncios', [AnunciosController::class, 'store'])->name('anuncios');
<<<<<<< HEAD
Route::post('/anuncios', [AnunciosController::class, 'publicarML'])->name('envio.anuncios');

=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
Route::get('/mensagensSellers', [AtedimentoController::class, 'atendimentosSellers'])->name('atendimentosSellers');
Route::get('/mensagensMercadoLivre', [AtedimentoController::class, 'atendimentosML'])->name('atendimentosML');

Route::post('/cadastroAdministradores', [CadastroController::class, 'storeA'])->name('cadastraAdmin');
Route::get('/cadastroAdministradores', [CadastroController::class, 'cadastroA'])->name('cadastroA');

Route::post('/cadastroSellers', [CadastroController::class, 'storeS'])->name('cadastraSeller');
Route::get('/cadastroSellers', [CadastroController::class, 'cadastroS'])->name('cadastroS');

Route::post('/roles', [CadastroController::class, 'storeR'])->name('cadastraRoles');
Route::get('/roles', [CadastroController::class, 'roles'])->name('roles');

Route::post('/cadastroProdutos', [CadastroController::class, 'storeP'])->name('cadastroProd');
Route::get('/cadastroProdutos', [CadastroController::class, 'cadastroP'])->name('cadastroP');

Route::post('/estoque', [InventoryController::class, 'store'])->name('estoqueCad');
Route::get('/estoque', [InventoryController::class, 'estoque'])->name('estoque');

Route::get('/register', [CompanyController::class, 'register'])->name('register');
Route::post('/cadastroEmpresas', [CompanyController::class, 'companies'])->name('cadastroEmpresas');

Route::get('/menus', [HomeController::class, 'menus'])->name('menus');

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pedidos', [PedidosController::class, 'pedidos'])->name('pedidos');
Route::get('/relatorioVendas', [RelatorioController::class, 'relatovendas'])->name('relatoriovendas');

Route::get('/prepare-to-login',[MeliController::class, 'preparetologin'])->name('prepare.login');
<<<<<<< HEAD
Route::get('/callback', [MeliController::class, 'callback'])->name('callback');
Route::get('/refresh-token',[MeliController::class, 'refreshAccessToken'])->name('refresh.token');
=======
Route::get('/callback', [MeliController::class, 'callback'])->name('callback');
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
