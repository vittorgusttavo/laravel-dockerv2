<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\PrincipalController;
Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
use App\Http\Controllers\ContatoController;
#   Sem parametro
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
#   Com parametro
/*Route::get('/contato/{nome}/{categoria_id?}', function(string $nome, int $categoria_id = 1){
    echo "Bem vindo: ".$nome." - ".$categoria_id;
})
# Metódo where serve para dar uma mensagem de erro mais inteligente e bonita, faz com que não estoure a Exceção do PHP e sim o not found
->where('categoria_id', '[0-9]+') 
->where('nome', '[A-Za-z]+');*/
use App\Http\Controllers\SobreNosController;
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/login', function(){ return 'Login';})->name('site.login');
#   Agrupando dentro de /app
use App\Http\Controllers\FornecedorController;
Route::prefix('/app')->group(
    function(){
        Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
        Route::get('/cliente', function(){return 'Cliente';})->name('app.cliente');
        Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
    }
);

use App\Http\Controllers\TesteController;
Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('site.teste');


#   Rota de fallback(páginas não encontrada).
Route::fallback(function(){
    echo 'Sentimos muito, mas a página acessada não existe.<br>
    <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial.';
});

