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

Route::group(['middleware' => 'auth'], function() {

    Route::get('/anuncios', [AnunciosController::class, 'store'])->middleware(['check.anuncios'])->name('anuncios');
    Route::post('/anuncios', [AnunciosController::class, 'publicarML'])->middleware(['check.anuncios'])->name('envio.anuncios');

    Route::get('/mensagensSellers', [AtedimentoController::class, 'atendimentosSellers'])->name('atendimentosSellers');
    Route::post('/mensagensSellers', [AtedimentoController::class, 'mensagensSellers'])->name('mensagensSellers');

    Route::get('/register', [CompanyController::class, 'register'])->middleware(['check.company'])->name('register');
    Route::post('/cadastroEmpresas', [CompanyController::class, 'companies'])->middleware(['check.roles'])->name('cadastroEmpresas');

    Route::get('/mensagensMercadoLivre', [MeliController::class, 'questions'])->middleware(['check.atendimentoML'])->name('atendimentosML');

    Route::post('/cadastroAdministradores', [CadastroController::class, 'storeA'])->middleware(['check.cadastroA'])->name('cadastraAdmin');
    Route::get('/cadastroAdministradores', [CadastroController::class, 'cadastroA'])->middleware(['check.cadastroA'])->name('cadastroA');

    Route::post('/cadastroSellers', [CadastroController::class, 'storeS'])->middleware(['check.atendimentoSeller'])->name('cadastraSeller');
    Route::get('/cadastroSellers', [CadastroController::class, 'cadastroS'])->middleware(['check.atendimentoSeller'])->name('cadastroS');

    Route::post('/roles', [CadastroController::class, 'storeR'])->middleware(['check.roles'])->name('cadastraRoles');
    Route::get('/roles', [CadastroController::class, 'roles'])->middleware(['check.roles'])->name('roles');

    Route::post('/cadastroProdutos', [CadastroController::class, 'storeP'])->middleware(['check.cadastroP'])->name('cadastroProd');
    Route::get('/cadastroProdutos', [CadastroController::class, 'cadastroP'])->middleware(['check.cadastroP'])->name('cadastroP');

    Route::post('/estoque', [InventoryController::class, 'store'])->middleware(['check.inventory'])->name('estoqueCad');
    Route::get('/estoque', [InventoryController::class, 'estoque'])->middleware(['check.inventory'])->name('estoque');

    Route::get('/relatorioVendas', [RelatorioController::class, 'relatovendas'])->middleware(['check.relatoV'])->name('relatoriovendas');

    Route::get('/menus', [HomeController::class, 'menus'])->name('menus');

    Route::get('/pedidos', [PedidosController::class, 'pedidos'])->middleware(['check.pedidos'])->name('pedidos');
    
    Route::get('/prepare-to-login',[MeliController::class, 'preparetologin'])->name('prepare.login');
    Route::get('/callback', [MeliController::class, 'callback'])->name('callback');
    Route::get('/refresh-token',[MeliController::class, 'refreshAccessToken'])->name('refresh.token');
    
});

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/', [HomeController::class, 'index'])->name('home');