<?php

use App\Models\Web4Administradores;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GraficolineController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\FaliedJobsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PasswordResetsController;
use App\Http\Controllers\PersonalAcessTokenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RelatorioPaginaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Web4AcessoController;
use App\Http\Controllers\PaginaAcaoController;
use App\Http\Controllers\Web4AdministradoresApiTokenController;
use App\Http\Controllers\Web4AdministradoresController;
use App\Http\Controllers\Web4AdministradoresEtapasController;
use App\Http\Controllers\Web4AdministradoresGrupoPaginaController;
use App\Http\Controllers\Web4AdministradoresGruposAcoesController;
use App\Http\Controllers\Web4AdministradoresGruposController;
use App\Http\Controllers\Web4AdministradoresGruposPaginaController;
use App\Http\Controllers\Web4AdministradoresOnesignalController;
use App\Http\Controllers\Web4AdministradoresRevendaController;
use App\Http\Controllers\Web4AdministradoresTokenAcessoController;
use App\Http\Controllers\Web4ArquivoController;
use App\Http\Controllers\Web4AutavisoController;
use App\Http\Controllers\Web4CampanhaController;
use App\Http\Controllers\Web4CampanhaDestinatarioController;
use App\Http\Controllers\Web4ConfiguracaoController;
use App\Http\Controllers\Web4EmailLogController;
use App\Http\Controllers\Web4InformativoAdministradoresController;
use App\Http\Controllers\Web4InformativoController;
use App\Http\Controllers\Web4InformativoRevendaController;
use App\Http\Controllers\Web4InformativosAdministradoresController;
use App\Http\Controllers\Web4InformativoVisualizacaoController;
use App\Http\Controllers\Web4ModeloEmailsController;
use App\Http\Controllers\Web4NegocioController;
use App\Http\Controllers\Web4NegociosAcoesController;
use App\Http\Controllers\Web4NegociosCategoriaController;
use App\Http\Controllers\Web4NegociosEtapaController;
use App\Http\Controllers\Web4NegociosLogEtapaController;
use App\Http\Controllers\Web4NegociosLogStatusController;
use App\Http\Controllers\Web4NegociosMotivoController;
use App\Http\Controllers\Web4NegociosStatus2Controller;
use App\Http\Controllers\Web4NegociosStatusController;
use App\Http\Controllers\Web4OperadoraController;
use App\Http\Controllers\Web4PaginaController;
use App\Http\Controllers\Web4PessoaController;
use App\Http\Controllers\Web4RelatorioAcessoController;
use App\Http\Controllers\Web4RevendaCategoriaController;
use App\Http\Controllers\Web4RevendaController;
use App\Http\Controllers\Web4RevendalogacessoController;
use App\Http\Controllers\Web4RevendaSetoreController;
use App\Http\Controllers\Web4TarefaAcoesController;
use App\Http\Controllers\Web4TarefaAgendamentoController;
use App\Http\Controllers\Web4TarefaCategoriaController;
use App\Http\Controllers\Web4TarefaController;
use App\Http\Controllers\Web4TarefaMotivoController;
use App\Http\Controllers\Web4TarefaResponsavelController;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\NegocioController;
use App\Http\Controllers\RelatorioController;


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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::get('graficoline',[GraficolineController::class,'index'])->middleware(['auth'])->name('graficoline');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

/*Cidade*/
Route::get('/create/Cidade',[CidadeController::class,'create'])->name('Cidade.create');
Route::post('/create/Cidade',[CidadeController::class,'create'])->name('Cidade.create');
Route::post('/storeCidade',[CidadeController::class,'store'])->name('Cidade.store');
Route::get('/index/Cidade',[CidadeController::class,'index'])->name('Cidade.index');
Route::delete('/Cidade/{id}',[CidadeController::class,'destroy'])->name('Cidade.delete');
Route::post('/Cidade/edit/{id}',[CidadeController::class,'edit'])->name('Cidade.edit');
Route::put('/Cidade/update/{id}',[CidadeController::class,'update'])->name('Cidade.update');

/*Estado     */

Route::get('/create/Estado',[EstadoController::class,'create'])->name('Estado.create');
Route::post('/create/Estado',[EstadoController::class,'create'])->name('Estado.create');
Route::post('/storeEstado',[EstadoController::class,'store'])->name('Estado.store');
Route::get('/index/Estado',[EstadoController::class,'index'])->name('Estado.index');
Route::delete('/Estado/{id}',[EstadoController::class,'destroy'])->name('Estado.delete');
Route::post('/Estado/edit/{id}',[EstadoController::class,'edit'])->name('Estado.edit');
Route::put('/Estado/update/{id}',[EstadoController::class,'update'])->name('Estado.update');

/*FailedJobs */
Route::get('/create/FaliedJobs',[FaliedJobsController::class,'create'])->name('FaliedJobs.create');
Route::post('/create/FaliedJobs',[FaliedJobsController::class,'create'])->name('FaliedJobs.create');
Route::post('/storeFaliedJobs',[FaliedJobsController::class,'store'])->name('FaliedJobs.store');
Route::get('/index/FaliedJobs',[FaliedJobsController::class,'index'])->name('FaliedJobs.index');
Route::delete('/FaliedJobs/{id}',[FaliedJobsController::class,'destroy'])->name('FaliedJobs.delete');
Route::post('/FaliedJobs/edit/{id}',[FaliedJobsController::class,'edit'])->name('FaliedJobs.edit');
Route::put('/FaliedJobs/update/{id}',[FaliedJobsController::class,'update'])->name('FaliedJobs.update');

Route::get('/create/Page',[PageController::class,'create'])->name('Page.create');
Route::post('/create/Page',[PageController::class,'create'])->name('Page.create');
Route::post('/storePage',[PageController::class,'store'])->name('Page.store');
Route::get('/index/Page',[PageController::class,'index'])->name('Page.index');
Route::delete('/Page/{id}',[PageController::class,'destroy'])->name('Page.delete');
Route::post('/Page/edit/{id}',[PageController::class,'edit'])->name('Page.edit');
Route::put('/Page/update/{id}',[PageController::class,'update'])->name('Page.update');

Route::get('/create/PaginaAcao',[PaginaAcaoController::class,'create'])->name('PaginaAcao.create');
Route::post('/create/PaginaAcao',[PaginaAcaoController::class,'create'])->name('PaginaAcao.create');
Route::post('/storePaginaAcao',[PaginaAcaoController::class,'store'])->name('PaginaAcao.store');
Route::get('/index/PaginaAcao',[PaginaAcaoController::class,'index'])->name('PaginaAcao.index');
Route::delete('/PaginaAcao/{id}',[PaginaAcaoController::class,'destroy'])->name('PaginaAcao.delete');
Route::post('/PaginaAcao/edit/{id}',[PaginaAcaoController::class,'edit'])->name('PaginaAcao.edit');
Route::put('/PaginaAcao/update/{id}',[PaginaAcaoController::class,'update'])->name('PaginaAcao.update');

Route::get('/create/PasswordResets',[PasswordResetsController::class,'create'])->name('PasswordResets.create');
Route::post('/create/PasswordResets',[PasswordResetsController::class,'create'])->name('PasswordResets.create');
Route::post('/storePasswordResets',[PasswordResetsController::class,'store'])->name('PasswordResets.store');
Route::get('/index/PasswordResets',[PasswordResetsController::class,'index'])->name('PasswordResets.index');
Route::delete('/PasswordResets/{id}',[PasswordResetsController::class,'destroy'])->name('PasswordResets.delete');
Route::post('/PasswordResets/edit/{id}',[PasswordResetsController::class,'edit'])->name('PasswordResets.edit');
Route::put('/PasswordResets/update/{id}',[PasswordResetsController::class,'update'])->name('PasswordResets.update');

Route::get('/create/PersonalAcessToken',[PersonalAcessTokenController::class,'create'])->name('PersonalAcessToken.create');
Route::post('/create/PersonalAcessToken',[PersonalAcessTokenController::class,'create'])->name('PersonalAcessToken.create');
Route::post('/storePersonalAcessToken',[PersonalAcessTokenController::class,'store'])->name('PersonalAcessToken.store');
Route::get('/index/PersonalAcessToken',[PersonalAcessTokenController::class,'index'])->name('PersonalAcessToken.index');
Route::delete('/PersonalAcessToken/{id}',[PersonalAcessTokenController::class,'destroy'])->name('PersonalAcessToken.delete');
Route::post('/PersonalAcessToken/edit/{id}',[PersonalAcessTokenController::class,'edit'])->name('PersonalAcessToken.edit');
Route::put('/PersonalAcessToken/update/{id}',[PersonalAcessTokenController::class,'update'])->name('PersonalAcessToken.update');

Route::get('/create/Profile',[ProfileController::class,'create'])->name('Profile.create');
Route::post('/create/Profile',[ProfileController::class,'create'])->name('Profile.create');
Route::post('/storeProfile',[ProfileController::class,'store'])->name('Profile.store');
Route::get('/index/Profile',[ProfileController::class,'index'])->name('Profile.index');
Route::delete('/Profile/{id}',[ProfileController::class,'destroy'])->name('Profile.delete');
Route::post('/Profile/edit/{id}',[ProfileController::class,'edit'])->name('Profile.edit');
Route::put('/Profile/update/{id}',[ProfileController::class,'update'])->name('Profile.update');

Route::get('/create/RelatorioPagina',[RelatorioPaginaController::class,'create'])->name('RelatorioPagina.create');
Route::post('/create/RelatorioPagina',[RelatorioPaginaController::class,'create'])->name('RelatorioPagina.create');
Route::post('/storeRelatorioPagina',[RelatorioPaginaController::class,'store'])->name('RelatorioPagina.store');
Route::get('/index/RelatorioPagina',[RelatorioPaginaController::class,'index'])->name('RelatorioPagina.index');
Route::delete('/RelatorioPagina/{id}',[RelatorioPaginaController::class,'destroy'])->name('RelatorioPagina.delete');
Route::post('/RelatorioPagina/edit/{id}',[RelatorioPaginaController::class,'edit'])->name('RelatorioPagina.edit');
Route::put('/RelatorioPagina/update/{id}',[RelatorioPaginaController::class,'update'])->name('RelatorioPagina.update');

Route::get('/create/User',[UserController::class,'create'])->name('User.create');
Route::post('/create/User',[UserController::class,'create'])->name('User.create');
Route::post('/storeUser',[UserController::class,'store'])->name('User.store');
Route::get('/index/User',[UserController::class,'index'])->name('User.index');
Route::delete('/User/{id}',[UserController::class,'destroy'])->name('User.delete');
Route::post('/User/edit/{id}',[UserController::class,'edit'])->name('User.edit');
Route::put('/User/update/{id}',[UserController::class,'update'])->name('User.update');

Route::get('/create/Web4Acesso',[Web4AcessoController::class,'create'])->name('Web4Acesso.create');
Route::post('/create/Web4Acesso',[Web4AcessoController::class,'create'])->name('Web4Acesso.create');
Route::post('/storeWeb4Acesso',[Web4AcessoController::class,'store'])->name('Web4Acesso.store');
Route::get('/index/Web4Acesso',[Web4AcessoController::class,'index'])->name('Web4Acesso.index');
Route::delete('/Web4Acesso/{id}',[Web4AcessoController::class,'destroy'])->name('Web4Acesso.delete');
Route::post('/Web4Acesso/edit/{id}',[Web4AcessoController::class,'edit'])->name('Web4Acesso.edit');
Route::put('/Web4Acesso/update/{id}',[Web4AcessoController::class,'update'])->name('Web4Acesso.update');

Route::get('/create/Web4AdministradoresApiToken',[Web4AdministradoresApiTokenController::class,'create'])->name('Web4AdministradoresApiToken.create');
Route::post('/create/Web4AdministradoresApiToken',[Web4AdministradoresApiTokenController::class,'create'])->name('Web4AdministradoresApiToken.create');
Route::post('/storeWeb4AdministradoresApiToken',[Web4AdministradoresApiTokenController::class,'store'])->name('Web4AdministradoresApiToken.store');
Route::get('/index/Web4AdministradoresApiToken',[Web4AdministradoresApiTokenController::class,'index'])->name('Web4AdministradoresApiToken.index');
Route::delete('/Web4AdministradoresApiToken/{id}',[Web4AdministradoresApiTokenController::class,'destroy'])->name('Web4AdministradoresApiToken.delete');
Route::post('/Web4AdministradoresApiToken/edit/{id}',[Web4AdministradoresApiTokenController::class,'edit'])->name('Web4AdministradoresApiToken.edit');
Route::put('/Web4AdministradoresApiToken/update/{id}',[Web4AdministradoresApiTokenController::class,'update'])->name('Web4AdministradoresApiToken.update');

Route::get('/create/Web4Administradores',[Web4AdministradoresController::class,'create'])->name('Web4Administradores.create');
Route::post('/create/Web4Administradores',[Web4AdministradoresController::class,'create'])->name('Web4Administradores.create');
Route::post('/storeWeb4Administradores',[Web4AdministradoresController::class,'store'])->name('Web4Administradores.store');
Route::get('/index/Web4Administradores',[Web4AdministradoresController::class,'index'])->name('Web4Administradores.index');
Route::delete('/Web4Administradores/{id}',[Web4AdministradoresController::class,'destroy'])->name('Web4Administradores.delete');
Route::post('/Web4Administradores/edit/{id}',[Web4AdministradoresController::class,'edit'])->name('Web4Administradores.edit');
Route::put('/Web4Administradores/update/{id}',[Web4AdministradoresController::class,'update'])->name('Web4Administradores.update');

Route::get('/create/Web4AdministradoresEtapas',[Web4AdministradoresEtapasController::class,'create'])->name('Web4AdministradoresEtapas.create');
Route::post('/create/Web4AdministradoresEtapas',[Web4AdministradoresEtapasController::class,'create'])->name('Web4AdministradoresEtapas.create');
Route::post('/storeWeb4AdministradoresEtapas',[Web4AdministradoresEtapasController::class,'store'])->name('Web4AdministradoresEtapas.store');
Route::get('/index/Web4AdministradoresEtapas',[Web4AdministradoresEtapasController::class,'index'])->name('Web4AdministradoresEtapas.index');
Route::delete('/Web4AdministradoresEtapas/{id}',[Web4AdministradoresEtapasController::class,'destroy'])->name('Web4AdministradoresEtapas.delete');
Route::post('/Web4AdministradoresEtapas/edit/{id}',[Web4AdministradoresEtapasController::class,'edit'])->name('Web4AdministradoresEtapas.edit');
Route::put('/Web4AdministradoresEtapas/update/{id}',[Web4AdministradoresEtapasController::class,'update'])->name('Web4AdministradoresEtapas.update');

Route::get('/create/ Web4AdministradoresGrupoPagina',[ Web4AdministradoresGrupoPaginaController::class,'create'])->name(' Web4AdministradoresGrupoPagina.create');
Route::post('/create/ Web4AdministradoresGrupoPagina',[ Web4AdministradoresGrupoPaginaController::class,'create'])->name(' Web4AdministradoresGrupoPagina.create');
Route::post('/store Web4AdministradoresGrupoPagina',[ Web4AdministradoresGrupoPaginaController::class,'store'])->name(' Web4AdministradoresGrupoPagina.store');
Route::get('/index/ Web4AdministradoresGrupoPagina',[ Web4AdministradoresGrupoPaginaController::class,'index'])->name(' Web4AdministradoresGrupoPagina.index');
Route::delete('/ Web4AdministradoresGrupoPagina/{id}',[ Web4AdministradoresGrupoPaginaController::class,'destroy'])->name(' Web4AdministradoresGrupoPagina.delete');
Route::post('/ Web4AdministradoresGrupoPagina/edit/{id}',[ Web4AdministradoresGrupoPaginaController::class,'edit'])->name(' Web4AdministradoresGrupoPagina.edit');
Route::put('/ Web4AdministradoresGrupoPagina/update/{id}',[ Web4AdministradoresGrupoPaginaController::class,'update'])->name(' Web4AdministradoresGrupoPagina.update');

Route::get('/create/Web4AdministradoresGruposAcoes',[Web4AdministradoresGruposAcoesController::class,'create'])->name('Web4AdministradoresGruposAcoes.create');
Route::post('/create/Web4AdministradoresGruposAcoes',[Web4AdministradoresGruposAcoesController::class,'create'])->name('Web4AdministradoresGruposAcoes.create');
Route::post('/storeWeb4AdministradoresGruposAcoes',[Web4AdministradoresGruposAcoesController::class,'store'])->name('Web4AdministradoresGruposAcoes.store');
Route::get('/index/Web4AdministradoresGruposAcoes',[Web4AdministradoresGruposAcoesController::class,'index'])->name('Web4AdministradoresGruposAcoes.index');
Route::delete('/Web4AdministradoresGruposAcoes/{id}',[Web4AdministradoresGruposAcoesController::class,'destroy'])->name('Web4AdministradoresGruposAcoes.delete');
Route::post('/Web4AdministradoresGruposAcoes/edit/{id}',[Web4AdministradoresGruposAcoesController::class,'edit'])->name('Web4AdministradoresGruposAcoes.edit');
Route::put('/Web4AdministradoresGruposAcoes/update/{id}',[Web4AdministradoresGruposAcoesController::class,'update'])->name('Web4AdministradoresGruposAcoes.update');

Route::get('/create/Web4AdministradoresGrupos',[Web4AdministradoresGruposController::class,'create'])->name('Web4AdministradoresGrupos.create');
Route::post('/create/Web4AdministradoresGrupos',[Web4AdministradoresGruposController::class,'create'])->name('Web4AdministradoresGrupos.create');
Route::post('/storeWeb4AdministradoresGrupos',[Web4AdministradoresGruposController::class,'store'])->name('Web4AdministradoresGrupos.store');
Route::get('/index/Web4AdministradoresGrupos',[Web4AdministradoresGruposController::class,'index'])->name('Web4AdministradoresGrupos.index');
Route::delete('/Web4AdministradoresGrupos/{id}',[Web4AdministradoresGruposController::class,'destroy'])->name('Web4AdministradoresGrupos.delete');
Route::post('/Web4AdministradoresGrupos/edit/{id}',[Web4AdministradoresGruposController::class,'edit'])->name('Web4AdministradoresGrupos.edit');
Route::put('/Web4AdministradoresGrupos/update/{id}',[Web4AdministradoresGruposController::class,'update'])->name('Web4AdministradoresGrupos.update');

Route::get('/create/Web4AdministradoresGruposPagina',[Web4AdministradoresGruposPaginaController::class,'create'])->name('Web4AdministradoresGruposPagina.create');
Route::post('/create/Web4AdministradoresGruposPagina',[Web4AdministradoresGruposPaginaController::class,'create'])->name('Web4AdministradoresGruposPagina.create');
Route::post('/storeWeb4AdministradoresGruposPagina',[Web4AdministradoresGruposPaginaController::class,'store'])->name('Web4AdministradoresGruposPagina.store');
Route::get('/index/Web4AdministradoresGruposPagina',[Web4AdministradoresGruposPaginaController::class,'index'])->name('Web4AdministradoresGruposPagina.index');
Route::delete('/Web4AdministradoresGruposPagina/{id}',[Web4AdministradoresGruposPaginaController::class,'destroy'])->name('Web4AdministradoresGruposPagina.delete');
Route::post('/Web4AdministradoresGruposPagina/edit/{id}',[Web4AdministradoresGruposPaginaController::class,'edit'])->name('Web4AdministradoresGruposPagina.edit');
Route::put('/Web4AdministradoresGruposPagina/update/{id}',[Web4AdministradoresGruposPaginaController::class,'update'])->name('Web4AdministradoresGruposPagina.update');

Route::get('/create/Web4AdministradoresOnesignal',[Web4AdministradoresOnesignalController::class,'create'])->name('Web4AdministradoresOnesignal.create');
Route::post('/create/Web4AdministradoresOnesignal',[Web4AdministradoresOnesignalController::class,'create'])->name('Web4AdministradoresOnesignal.create');
Route::post('/storeWeb4AdministradoresOnesignal',[Web4AdministradoresOnesignalController::class,'store'])->name('Web4AdministradoresOnesignal.store');
Route::get('/index/Web4AdministradoresOnesignal',[Web4AdministradoresOnesignalController::class,'index'])->name('Web4AdministradoresOnesignal.index');
Route::delete('/Web4AdministradoresOnesignal/{id}',[Web4AdministradoresOnesignalController::class,'destroy'])->name('Web4AdministradoresOnesignal.delete');
Route::post('/Web4AdministradoresOnesignal/edit/{id}',[Web4AdministradoresOnesignalController::class,'edit'])->name('Web4AdministradoresOnesignal.edit');
Route::put('/Web4AdministradoresOnesignal/update/{id}',[Web4AdministradoresOnesignalController::class,'update'])->name('Web4AdministradoresOnesignal.update');

Route::get('/create/Web4AdministradoresRevenda',[Web4AdministradoresRevendaController::class,'create'])->name('Web4AdministradoresRevenda.create');
Route::post('/create/Web4AdministradoresRevenda',[Web4AdministradoresRevendaController::class,'create'])->name('Web4AdministradoresRevenda.create');
Route::post('/storeWeb4AdministradoresRevenda',[Web4AdministradoresRevendaController::class,'store'])->name('Web4AdministradoresRevenda.store');
Route::get('/index/Web4AdministradoresRevenda',[Web4AdministradoresRevendaController::class,'index'])->name('Web4AdministradoresRevenda.index');
Route::delete('/Web4AdministradoresRevenda/{id}',[Web4AdministradoresRevendaController::class,'destroy'])->name('Web4AdministradoresRevenda.delete');
Route::post('/Web4AdministradoresRevenda/edit/{id}',[Web4AdministradoresRevendaController::class,'edit'])->name('Web4AdministradoresRevenda.edit');
Route::put('/Web4AdministradoresRevenda/update/{id}',[Web4AdministradoresRevendaController::class,'update'])->name('Web4AdministradoresRevenda.update');

Route::get('/create/Web4AdministradoresTokenAcesso',[Web4AdministradoresTokenAcessoController::class,'create'])->name('Web4AdministradoresTokenAcesso.create');
Route::post('/create/Web4AdministradoresTokenAcesso',[Web4AdministradoresTokenAcessoController::class,'create'])->name('Web4AdministradoresTokenAcesso.create');
Route::post('/storeWeb4AdministradoresTokenAcesso',[Web4AdministradoresTokenAcessoController::class,'store'])->name('Web4AdministradoresTokenAcesso.store');
Route::get('/index/Web4AdministradoresTokenAcesso',[Web4AdministradoresTokenAcessoController::class,'index'])->name('Web4AdministradoresTokenAcesso.index');
Route::delete('/Web4AdministradoresTokenAcesso/{id}',[Web4AdministradoresTokenAcessoController::class,'destroy'])->name('Web4AdministradoresTokenAcesso.delete');
Route::post('/Web4AdministradoresTokenAcesso/edit/{id}',[Web4AdministradoresTokenAcessoController::class,'edit'])->name('Web4AdministradoresTokenAcesso.edit');
Route::put('/Web4AdministradoresTokenAcesso/update/{id}',[Web4AdministradoresTokenAcessoController::class,'update'])->name('Web4AdministradoresTokenAcesso.update');

Route::get('/create/Web4Arquivo',[Web4ArquivoController::class,'create'])->name('Web4Arquivo.create');
Route::post('/create/Web4Arquivo',[Web4ArquivoController::class,'create'])->name('Web4Arquivo.create');
Route::post('/storeWeb4Arquivo',[Web4ArquivoController::class,'store'])->name('Web4Arquivo.store');
Route::get('/index/Web4Arquivo',[Web4ArquivoController::class,'index'])->name('Web4Arquivo.index');
Route::delete('/Web4Arquivo/{id}',[Web4ArquivoController::class,'destroy'])->name('Web4Arquivo.delete');
Route::post('/Web4Arquivo/edit/{id}',[Web4ArquivoController::class,'edit'])->name('Web4Arquivo.edit');
Route::put('/Web4Arquivo/update/{id}',[Web4ArquivoController::class,'update'])->name('Web4Arquivo.update');

Route::get('/create/Web4Autaviso',[Web4AutavisoController::class,'create'])->name('Web4Autaviso.create');
Route::post('/create/Web4Autaviso',[Web4AutavisoController::class,'create'])->name('Web4Autaviso.create');
Route::post('/storeWeb4Autaviso',[Web4AutavisoController::class,'store'])->name('Web4Autaviso.store');
Route::get('/index/Web4Autaviso',[Web4AutavisoController::class,'index'])->name('Web4Autaviso.index');
Route::delete('/Web4Autaviso/{id}',[Web4AutavisoController::class,'destroy'])->name('Web4Autaviso.delete');
Route::post('/Web4Autaviso/edit/{id}',[Web4AutavisoController::class,'edit'])->name('Web4Autaviso.edit');
Route::put('/Web4Autaviso/update/{id}',[Web4AutavisoController::class,'update'])->name('Web4Autaviso.update');


Route::get('/create/Web4Campanha',[Web4CampanhaController::class,'create'])->name('Web4Campanha.create');
Route::post('/create/Web4Campanha',[Web4CampanhaController::class,'create'])->name('Web4Campanha.create');
Route::post('/storeWeb4Campanha',[Web4CampanhaController::class,'store'])->name('Web4Campanha.store');
Route::get('/index/Web4Campanha',[Web4CampanhaController::class,'index'])->name('Web4Campanha.index');
Route::delete('/Web4Campanha/{id}',[Web4CampanhaController::class,'destroy'])->name('Web4Campanha.delete');
Route::post('/Web4Campanha/edit/{id}',[Web4CampanhaController::class,'edit'])->name('Web4Campanha.edit');
Route::put('/Web4Campanha/update/{id}',[Web4CampanhaController::class,'update'])->name('Web4Campanha.update');


Route::get('/create/Web4CampanhaDestinatario',[Web4CampanhaDestinatarioController::class,'create'])->name('Web4CampanhaDestinatario.create');
Route::post('/create/Web4CampanhaDestinatario',[Web4CampanhaDestinatarioController::class,'create'])->name('Web4CampanhaDestinatario.create');
Route::post('/storeWeb4CampanhaDestinatario',[Web4CampanhaDestinatarioController::class,'store'])->name('Web4CampanhaDestinatario.store');
Route::get('/index/Web4CampanhaDestinatario',[Web4CampanhaDestinatarioController::class,'index'])->name('Web4CampanhaDestinatario.index');
Route::delete('/Web4CampanhaDestinatario/{id}',[Web4CampanhaDestinatarioController::class,'destroy'])->name('Web4CampanhaDestinatario.delete');
Route::post('/Web4CampanhaDestinatario/edit/{id}',[Web4CampanhaDestinatarioController::class,'edit'])->name('Web4CampanhaDestinatario.edit');
Route::put('/Web4CampanhaDestinatario/update/{id}',[Web4CampanhaDestinatarioController::class,'update'])->name('Web4CampanhaDestinatario.update');

Route::get('/create/Web4Configuracao',[Web4ConfiguracaoController::class,'create'])->name('Web4Configuracao.create');
Route::post('/create/Web4Configuracao',[Web4ConfiguracaoController::class,'create'])->name('Web4Configuracao.create');
Route::post('/storeWeb4Configuracao',[Web4ConfiguracaoController::class,'store'])->name('Web4Configuracao.store');
Route::get('/index/Web4Configuracao',[Web4ConfiguracaoController::class,'index'])->name('Web4Configuracao.index');
Route::delete('/Web4Configuracao/{id}',[Web4ConfiguracaoController::class,'destroy'])->name('Web4Configuracao.delete');
Route::post('/Web4Configuracao/edit/{id}',[Web4ConfiguracaoController::class,'edit'])->name('Web4Configuracao.edit');
Route::put('/Web4Configuracao/update/{id}',[Web4ConfiguracaoController::class,'update'])->name('Web4Configuracao.update');

Route::get('/create/Web4EmailLog',[Web4EmailLogController::class,'create'])->name('Web4EmailLog.create');
Route::post('/create/Web4EmailLog',[Web4EmailLogController::class,'create'])->name('Web4EmailLog.create');
Route::post('/storeWeb4EmailLog',[Web4EmailLogController::class,'store'])->name('Web4EmailLog.store');
Route::get('/index/Web4EmailLog',[Web4EmailLogController::class,'index'])->name('Web4EmailLog.index');
Route::delete('/Web4EmailLog/{id}',[Web4EmailLogController::class,'destroy'])->name('Web4EmailLog.delete');
Route::post('/Web4EmailLog/edit/{id}',[Web4EmailLogController::class,'edit'])->name('Web4EmailLog.edit');
Route::put('/Web4EmailLog/update/{id}',[Web4EmailLogController::class,'update'])->name('Web4EmailLog.update');

Route::get('/create/Web4InformativoAdministradores',[Web4InformativoAdministradoresController::class,'create'])->name('Web4InformativoAdministradores.create');
Route::post('/create/Web4InformativoAdministradores',[Web4InformativoAdministradoresController::class,'create'])->name('Web4InformativoAdministradores.create');
Route::post('/storeWeb4InformativoAdministradores',[Web4InformativoAdministradoresController::class,'store'])->name('Web4InformativoAdministradores.store');
Route::get('/index/Web4InformativoAdministradores',[Web4InformativoAdministradoresController::class,'index'])->name('Web4InformativoAdministradores.index');
Route::delete('/Web4InformativoAdministradores/{id}',[Web4InformativoAdministradoresController::class,'destroy'])->name('Web4InformativoAdministradores.delete');
Route::post('/Web4InformativoAdministradores/edit/{id}',[Web4InformativoAdministradoresController::class,'edit'])->name('Web4InformativoAdministradores.edit');
Route::put('/Web4InformativoAdministradores/update/{id}',[Web4InformativoAdministradoresController::class,'update'])->name('Web4InformativoAdministradores.update');

Route::get('/create/Web4Informativo',[Web4InformativoController::class,'create'])->name('Web4Informativo.create');
Route::post('/create/Web4Informativo',[Web4InformativoController::class,'create'])->name('Web4Informativo.create');
Route::post('/storeWeb4Informativo',[Web4InformativoController::class,'store'])->name('Web4Informativo.store');
Route::get('/index/Web4Informativo',[Web4InformativoController::class,'index'])->name('Web4Informativo.index');
Route::delete('/Web4Informativo/{id}',[Web4InformativoController::class,'destroy'])->name('Web4Informativo.delete');
Route::post('/Web4Informativo/edit/{id}',[Web4InformativoController::class,'edit'])->name('Web4Informativo.edit');
Route::put('/Web4Informativo/update/{id}',[Web4InformativoController::class,'update'])->name('Web4Informativo.update');



Route::get('/create/Web4InformativoRevenda',[Web4InformativoRevendaController::class,'create'])->name('Web4InformativoRevenda.create');
Route::post('/create/Web4InformativoRevenda',[Web4InformativoRevendaController::class,'create'])->name('Web4InformativoRevenda.create');
Route::post('/storeWeb4InformativoRevenda',[Web4InformativoRevendaController::class,'store'])->name('Web4InformativoRevenda.store');
Route::get('/index/Web4InformativoRevenda',[Web4InformativoRevendaController::class,'index'])->name('Web4InformativoRevenda.index');
Route::delete('/Web4InformativoRevenda/{id}',[Web4InformativoRevendaController::class,'destroy'])->name('Web4InformativoRevenda.delete');
Route::post('/Web4InformativoRevenda/edit/{id}',[Web4InformativoRevendaController::class,'edit'])->name('Web4InformativoRevenda.edit');
Route::put('/Web4InformativoRevenda/update/{id}',[Web4InformativoRevendaController::class,'update'])->name('Web4InformativoRevenda.update');


Route::get('/create/Web4InformativosAdministradores',[Web4InformativosAdministradoresController::class,'create'])->name('Web4InformativosAdministradores.create');
Route::post('/create/Web4InformativosAdministradores',[Web4InformativosAdministradoresController::class,'create'])->name('Web4InformativosAdministradores.create');
Route::post('/storeWeb4InformativosAdministradores',[Web4InformativosAdministradoresController::class,'store'])->name('Web4InformativosAdministradores.store');
Route::get('/index/Web4InformativosAdministradores',[Web4InformativosAdministradoresController::class,'index'])->name('Web4InformativosAdministradores.index');
Route::delete('/Web4InformativosAdministradores/{id}',[Web4InformativosAdministradoresController::class,'destroy'])->name('Web4InformativosAdministradores.delete');
Route::post('/Web4InformativosAdministradores/edit/{id}',[Web4InformativosAdministradoresController::class,'edit'])->name('Web4InformativosAdministradores.edit');
Route::put('/Web4InformativosAdministradores/update/{id}',[Web4InformativosAdministradoresController::class,'update'])->name('Web4InformativosAdministradores.update');


Route::get('/create/Web4InformativoVisualizacao',[Web4InformativoVisualizacaoController::class,'create'])->name('Web4InformativoVisualizacao.create');
Route::post('/create/Web4InformativoVisualizacao',[Web4InformativoVisualizacaoController::class,'create'])->name('Web4InformativoVisualizacao.create');
Route::post('/storeWeb4InformativoVisualizacao',[Web4InformativoVisualizacaoController::class,'store'])->name('Web4InformativoVisualizacao.store');
Route::get('/index/Web4InformativoVisualizacao',[Web4InformativoVisualizacaoController::class,'index'])->name('Web4InformativoVisualizacao.index');
Route::delete('/Web4InformativoVisualizacao/{id}',[Web4InformativoVisualizacaoController::class,'destroy'])->name('Web4InformativoVisualizacao.delete');
Route::post('/Web4InformativoVisualizacao/edit/{id}',[Web4InformativoVisualizacaoController::class,'edit'])->name('Web4InformativoVisualizacao.edit');
Route::put('/Web4InformativoVisualizacao/update/{id}',[Web4InformativoVisualizacaoController::class,'update'])->name('Web4InformativoVisualizacao.update');


Route::get('/create/Web4ModeloEmails',[Web4ModeloEmailsController::class,'create'])->name('Web4ModeloEmails.create');
Route::post('/create/Web4ModeloEmails',[Web4ModeloEmailsController::class,'create'])->name('Web4ModeloEmails.create');
Route::post('/storeWeb4ModeloEmails',[Web4ModeloEmailsController::class,'store'])->name('Web4ModeloEmails.store');
Route::get('/index/Web4ModeloEmails',[Web4ModeloEmailsController::class,'index'])->name('Web4ModeloEmails.index');
Route::delete('/Web4ModeloEmails/{id}',[Web4ModeloEmailsController::class,'destroy'])->name('Web4ModeloEmails.delete');
Route::post('/Web4ModeloEmails/edit/{id}',[Web4ModeloEmailsController::class,'edit'])->name('Web4ModeloEmails.edit');
Route::put('/Web4ModeloEmails/update/{id}',[Web4ModeloEmailsController::class,'update'])->name('Web4ModeloEmails.update');



Route::get('/create/Web4Negocio',[Web4NegocioController::class,'create'])->name('Web4Negocio.create');
Route::post('/create/Web4Negocio',[Web4NegocioController::class,'create'])->name('Web4Negocio.create');
Route::post('/storeWeb4Negocio',[Web4NegocioController::class,'store'])->name('Web4Negocio.store');
Route::get('/index/Web4Negocio',[Web4NegocioController::class,'index'])->name('Web4Negocio.index');
Route::delete('/Web4Negocio/{id}',[Web4NegocioController::class,'destroy'])->name('Web4Negocio.delete');
Route::post('/Web4Negocio/edit/{id}',[Web4NegocioController::class,'edit'])->name('Web4Negocio.edit');
Route::put('/Web4Negocio/update/{id}',[Web4NegocioController::class,'update'])->name('Web4Negocio.update');


Route::get('/create/Web4NegociosAcoes',[Web4NegociosAcoesController::class,'create'])->name('Web4NegociosAcoes.create');
Route::post('/create/Web4NegociosAcoes',[Web4NegociosAcoesController::class,'create'])->name('Web4NegociosAcoes.create');
Route::post('/storeWeb4NegociosAcoes',[Web4NegociosAcoesController::class,'store'])->name('Web4NegociosAcoes.store');
Route::get('/index/Web4NegociosAcoes',[Web4NegociosAcoesController::class,'index'])->name('Web4NegociosAcoes.index');
Route::delete('/Web4NegociosAcoes/{id}',[Web4NegociosAcoesController::class,'destroy'])->name('Web4NegociosAcoes.delete');
Route::post('/Web4NegociosAcoes/edit/{id}',[Web4NegociosAcoesController::class,'edit'])->name('Web4NegociosAcoes.edit');
Route::put('/Web4NegociosAcoes/update/{id}',[Web4NegociosAcoesController::class,'update'])->name('Web4NegociosAcoes.update');


Route::get('/create/Web4NegociosCategoria',[Web4NegociosCategoriaController::class,'create'])->name('Web4NegociosCategoria.create');
Route::post('/create/Web4NegociosCategoria',[Web4NegociosCategoriaController::class,'create'])->name('Web4NegociosCategoria.create');
Route::post('/storeWeb4NegociosCategoria',[Web4NegociosCategoriaController::class,'store'])->name('Web4NegociosCategoria.store');
Route::get('/index/Web4NegociosCategoria',[Web4NegociosCategoriaController::class,'index'])->name('Web4NegociosCategoria.index');
Route::delete('/Web4NegociosCategoria/{id}',[Web4NegociosCategoriaController::class,'destroy'])->name('Web4NegociosCategoria.delete');
Route::post('/Web4NegociosCategoria/edit/{id}',[Web4NegociosCategoriaController::class,'edit'])->name('Web4NegociosCategoria.edit');
Route::put('/Web4NegociosCategoria/update/{id}',[Web4NegociosCategoriaController::class,'update'])->name('Web4NegociosCategoria.update');


Route::get('/create/Web4NegociosEtapa',[Web4NegociosEtapaController::class,'create'])->name('Web4NegociosEtapa.create');
Route::post('/create/Web4NegociosEtapa',[Web4NegociosEtapaController::class,'create'])->name('Web4NegociosEtapa.create');
Route::post('/storeWeb4NegociosEtapa',[Web4NegociosEtapaController::class,'store'])->name('Web4NegociosEtapa.store');
Route::get('/index/Web4NegociosEtapa',[Web4NegociosEtapaController::class,'index'])->name('Web4NegociosEtapa.index');
Route::delete('/Web4NegociosEtapa/{id}',[Web4NegociosEtapaController::class,'destroy'])->name('Web4NegociosEtapa.delete');
Route::post('/Web4NegociosEtapa/edit/{id}',[Web4NegociosEtapaController::class,'edit'])->name('Web4NegociosEtapa.edit');
Route::put('/Web4NegociosEtapa/update/{id}',[Web4NegociosEtapaController::class,'update'])->name('Web4NegociosEtapa.update');


Route::get('/create/Web4NegociosLogEtapa',[Web4NegociosLogEtapaController::class,'create'])->name('Web4NegociosLogEtapa.create');
Route::post('/create/Web4NegociosLogEtapa',[Web4NegociosLogEtapaController::class,'create'])->name('Web4NegociosLogEtapa.create');
Route::post('/storeWeb4NegociosLogEtapa',[Web4NegociosLogEtapaController::class,'store'])->name('Web4NegociosLogEtapa.store');
Route::get('/index/Web4NegociosLogEtapa',[Web4NegociosLogEtapaController::class,'index'])->name('Web4NegociosLogEtapa.index');
Route::delete('/Web4NegociosLogEtapa/{id}',[Web4NegociosLogEtapaController::class,'destroy'])->name('Web4NegociosLogEtapa.delete');
Route::post('/Web4NegociosLogEtapa/edit/{id}',[Web4NegociosLogEtapaController::class,'edit'])->name('Web4NegociosLogEtapa.edit');
Route::put('/Web4NegociosLogEtapa/update/{id}',[Web4NegociosLogEtapaController::class,'update'])->name('Web4NegociosLogEtapa.update');

Route::get('/create/Web4NegociosLogStatus',[Web4NegociosLogStatusController::class,'create'])->name('Web4NegociosLogStatus.create');
Route::post('/create/Web4NegociosLogStatus',[Web4NegociosLogStatusController::class,'create'])->name('Web4NegociosLogStatus.create');
Route::post('/storeWeb4NegociosLogStatus',[Web4NegociosLogStatusController::class,'store'])->name('Web4NegociosLogStatus.store');
Route::get('/index/Web4NegociosLogStatus',[Web4NegociosLogStatusController::class,'index'])->name('Web4NegociosLogStatus.index');
Route::delete('/Web4NegociosLogStatus/{id}',[Web4NegociosLogStatusController::class,'destroy'])->name('Web4NegociosLogStatus.delete');
Route::post('/Web4NegociosLogStatus/edit/{id}',[Web4NegociosLogStatusController::class,'edit'])->name('Web4NegociosLogStatus.edit');
Route::put('/Web4NegociosLogStatus/update/{id}',[Web4NegociosLogStatusController::class,'update'])->name('Web4NegociosLogStatus.update');

Route::get('/create/Web4NegociosMotivo',[Web4NegociosMotivoController::class,'create'])->name('Web4NegociosMotivo.create');
Route::post('/create/Web4NegociosMotivo',[Web4NegociosMotivoController::class,'create'])->name('Web4NegociosMotivo.create');
Route::post('/storeWeb4NegociosMotivo',[Web4NegociosMotivoController::class,'store'])->name('Web4NegociosMotivo.store');
Route::get('/index/Web4NegociosMotivo',[Web4NegociosMotivoController::class,'index'])->name('Web4NegociosMotivo.index');
Route::delete('/Web4NegociosMotivo/{id}',[Web4NegociosMotivoController::class,'destroy'])->name('Web4NegociosMotivo.delete');
Route::post('/Web4NegociosMotivo/edit/{id}',[Web4NegociosMotivoController::class,'edit'])->name('Web4NegociosMotivo.edit');
Route::put('/Web4NegociosMotivo/update/{id}',[Web4NegociosMotivoController::class,'update'])->name('Web4NegociosMotivo.update');

Route::get('/create/Web4NegociosStatus2',[Web4NegociosStatus2Controller::class,'create'])->name('Web4NegociosStatus2.create');
Route::post('/create/Web4NegociosStatus2',[Web4NegociosStatus2Controller::class,'create'])->name('Web4NegociosStatus2.create');
Route::post('/storeWeb4NegociosStatus2',[Web4NegociosStatus2Controller::class,'store'])->name('Web4NegociosStatus2.store');
Route::get('/index/Web4NegociosStatus2',[Web4NegociosStatus2Controller::class,'index'])->name('Web4NegociosStatus2.index');
Route::delete('/Web4NegociosStatus2/{id}',[Web4NegociosStatus2Controller::class,'destroy'])->name('Web4NegociosStatus2.delete');
Route::post('/Web4NegociosStatus2/edit/{id}',[Web4NegociosStatus2Controller::class,'edit'])->name('Web4NegociosStatus2.edit');
Route::put('/Web4NegociosStatus2/update/{id}',[Web4NegociosStatus2Controller::class,'update'])->name('Web4NegociosStatus2.update');

Route::get('/create/Web4NegociosStatus',[Web4NegociosStatusController::class,'create'])->name('Web4NegociosStatus.create');
Route::post('/create/Web4NegociosStatus',[Web4NegociosStatusController::class,'create'])->name('Web4NegociosStatus.create');
Route::post('/storeWeb4NegociosStatus',[Web4NegociosStatusController::class,'store'])->name('Web4NegociosStatus.store');
Route::get('/index/Web4NegociosStatus',[Web4NegociosStatusController::class,'index'])->name('Web4NegociosStatus.index');
Route::delete('/Web4NegociosStatus/{id}',[Web4NegociosStatusController::class,'destroy'])->name('Web4NegociosStatus.delete');
Route::post('/Web4NegociosStatus/edit/{id}',[Web4NegociosStatusController::class,'edit'])->name('Web4NegociosStatus.edit');
Route::put('/Web4NegociosStatus/update/{id}',[Web4NegociosStatusController::class,'update'])->name('Web4NegociosStatus.update');

Route::get('/create/Web4Operadora',[Web4OperadoraController::class,'create'])->name('Web4Operadora.create');
Route::post('/create/Web4Operadora',[Web4OperadoraController::class,'create'])->name('Web4Operadora.create');
Route::post('/storeWeb4Operadora',[Web4OperadoraController::class,'store'])->name('Web4Operadora.store');
Route::get('/index/Web4Operadora',[Web4OperadoraController::class,'index'])->name('Web4Operadora.index');
Route::delete('/Web4Operadora/{id}',[Web4OperadoraController::class,'destroy'])->name('Web4Operadora.delete');
Route::post('/Web4Operadora/edit/{id}',[Web4OperadoraController::class,'edit'])->name('Web4Operadora.edit');
Route::put('/Web4Operadora/update/{id}',[Web4OperadoraController::class,'update'])->name('Web4Operadora.update');

Route::get('/create/Web4Pagina',[Web4PaginaController::class,'create'])->name('Web4Pagina.create');
Route::post('/create/Web4Pagina',[Web4PaginaController::class,'create'])->name('Web4Pagina.create');
Route::post('/storeWeb4Pagina',[Web4PaginaController::class,'store'])->name('Web4Pagina.store');
Route::get('/index/Web4Pagina',[Web4PaginaController::class,'index'])->name('Web4Pagina.index');
Route::delete('/Web4Pagina/{id}',[Web4PaginaController::class,'destroy'])->name('Web4Pagina.delete');
Route::post('/Web4Pagina/edit/{id}',[Web4PaginaController::class,'edit'])->name('Web4Pagina.edit');
Route::put('/Web4Pagina/update/{id}',[Web4PaginaController::class,'update'])->name('Web4Pagina.update');

Route::get('/create/Web4Pessoa',[Web4PessoaController::class,'create'])->name('Web4Pessoa.create');
Route::post('/create/Web4Pessoa',[Web4PessoaController::class,'create'])->name('Web4Pessoa.create');
Route::post('/storeWeb4Pessoa',[Web4PessoaController::class,'store'])->name('Web4Pessoa.store');
Route::get('/index/Web4Pessoa',[Web4PessoaController::class,'index'])->name('Web4Pessoa.index');
Route::delete('/Web4Pessoa/{id}',[Web4PessoaController::class,'destroy'])->name('Web4Pessoa.delete');
Route::post('/Web4Pessoa/edit/{id}',[Web4PessoaController::class,'edit'])->name('Web4Pessoa.edit');
Route::put('/Web4Pessoa/update/{id}',[Web4PessoaController::class,'update'])->name('Web4Pessoa.update');

Route::get('/create/Web4RelatorioAcesso',[Web4RelatorioAcessoController::class,'create'])->name('Web4RelatorioAcesso.create');
Route::post('/create/Web4RelatorioAcesso',[Web4RelatorioAcessoController::class,'create'])->name('Web4RelatorioAcesso.create');
Route::post('/storeWeb4RelatorioAcesso',[Web4RelatorioAcessoController::class,'store'])->name('Web4RelatorioAcesso.store');
Route::get('/index/Web4RelatorioAcesso',[Web4RelatorioAcessoController::class,'index'])->name('Web4RelatorioAcesso.index');
Route::delete('/Web4RelatorioAcesso/{id}',[Web4RelatorioAcessoController::class,'destroy'])->name('Web4RelatorioAcesso.delete');
Route::post('/Web4RelatorioAcesso/edit/{id}',[Web4RelatorioAcessoController::class,'edit'])->name('Web4RelatorioAcesso.edit');
Route::put('/Web4RelatorioAcesso/update/{id}',[Web4RelatorioAcessoController::class,'update'])->name('Web4RelatorioAcesso.update');

Route::get('/create/Web4RevendaCategoria',[Web4RevendaCategoriaController::class,'create'])->name('Web4RevendaCategoria.create');
Route::post('/create/Web4RevendaCategoria',[Web4RevendaCategoriaController::class,'create'])->name('Web4RevendaCategoria.create');
Route::post('/storeWeb4RevendaCategoria',[Web4RevendaCategoriaController::class,'store'])->name('Web4RevendaCategoria.store');
Route::get('/index/Web4RevendaCategoria',[Web4RevendaCategoriaController::class,'index'])->name('Web4RevendaCategoria.index');
Route::delete('/Web4RevendaCategoria/{id}',[Web4RevendaCategoriaController::class,'destroy'])->name('Web4RevendaCategoria.delete');
Route::post('/Web4RevendaCategoria/edit/{id}',[Web4RevendaCategoriaController::class,'edit'])->name('Web4RevendaCategoria.edit');
Route::put('/Web4RevendaCategoria/update/{id}',[Web4RevendaCategoriaController::class,'update'])->name('Web4RevendaCategoria.update');

Route::get('/create/Web4Revenda',[Web4RevendaController::class,'create'])->name('Web4Revenda.create');
Route::post('/create/Web4Revenda',[Web4RevendaController::class,'create'])->name('Web4Revenda.create');
Route::post('/storeWeb4Revenda',[Web4RevendaController::class,'store'])->name('Web4Revenda.store');
Route::get('/index/Web4Revenda',[Web4RevendaController::class,'index'])->name('Web4Revenda.index');
Route::delete('/Web4Revenda/{id}',[Web4RevendaController::class,'destroy'])->name('Web4Revenda.delete');
Route::post('/Web4Revenda/edit/{id}',[Web4RevendaController::class,'edit'])->name('Web4Revenda.edit');
Route::put('/Web4Revenda/update/{id}',[Web4RevendaController::class,'update'])->name('Web4Revenda.update');

Route::get('/create/Web4Revendalogacesso',[Web4RevendalogacessoController::class,'create'])->name('Web4Revendalogacesso.create');
Route::post('/create/Web4Revendalogacesso',[Web4RevendalogacessoController::class,'create'])->name('Web4Revendalogacesso.create');
Route::post('/storeWeb4Revendalogacesso',[Web4RevendalogacessoController::class,'store'])->name('Web4Revendalogacesso.store');
Route::get('/index/Web4Revendalogacesso',[Web4RevendalogacessoController::class,'index'])->name('Web4Revendalogacesso.index');
Route::delete('/Web4Revendalogacesso/{id}',[Web4RevendalogacessoController::class,'destroy'])->name('Web4Revendalogacesso.delete');
Route::post('/Web4Revendalogacesso/edit/{id}',[Web4RevendalogacessoController::class,'edit'])->name('Web4Revendalogacesso.edit');
Route::put('/Web4Revendalogacesso/update/{id}',[Web4RevendalogacessoController::class,'update'])->name('Web4Revendalogacesso.update');

Route::get('/create/Web4RevendaSetore',[Web4RevendaSetoreController::class,'create'])->name('Web4RevendaSetore.create');
Route::post('/create/Web4RevendaSetore',[Web4RevendaSetoreController::class,'create'])->name('Web4RevendaSetore.create');
Route::post('/storeWeb4RevendaSetore',[Web4RevendaSetoreController::class,'store'])->name('Web4RevendaSetore.store');
Route::get('/index/Web4RevendaSetore',[Web4RevendaSetoreController::class,'index'])->name('Web4RevendaSetore.index');
Route::delete('/Web4RevendaSetore/{id}',[Web4RevendaSetoreController::class,'destroy'])->name('Web4RevendaSetore.delete');
Route::post('/Web4RevendaSetore/edit/{id}',[Web4RevendaSetoreController::class,'edit'])->name('Web4RevendaSetore.edit');
Route::put('/Web4RevendaSetore/update/{id}',[Web4RevendaSetoreController::class,'update'])->name('Web4RevendaSetore.update');


Route::get('/create/Web4TarefaAcoes',[Web4TarefaAcoesController::class,'create'])->name('Web4TarefaAcoes.create');
Route::post('/create/Web4TarefaAcoes',[Web4TarefaAcoesController::class,'create'])->name('Web4TarefaAcoes.create');
Route::post('/storeWeb4TarefaAcoes',[Web4TarefaAcoesController::class,'store'])->name('Web4TarefaAcoes.store');
Route::get('/index/Web4TarefaAcoes',[Web4TarefaAcoesController::class,'index'])->name('Web4TarefaAcoes.index');
Route::delete('/Web4TarefaAcoes/{id}',[Web4TarefaAcoesController::class,'destroy'])->name('Web4TarefaAcoes.delete');
Route::post('/Web4TarefaAcoes/edit/{id}',[Web4TarefaAcoesController::class,'edit'])->name('Web4TarefaAcoes.edit');
Route::put('/Web4TarefaAcoes/update/{id}',[Web4TarefaAcoesController::class,'update'])->name('Web4TarefaAcoes.update');

Route::get('/create/Web4TarefaAgendamento',[Web4TarefaAgendamentoController::class,'create'])->name('Web4TarefaAgendamento.create');
Route::post('/create/Web4TarefaAgendamento',[Web4TarefaAgendamentoController::class,'create'])->name('Web4TarefaAgendamento.create');
Route::post('/storeWeb4TarefaAgendamento',[Web4TarefaAgendamentoController::class,'store'])->name('Web4TarefaAgendamento.store');
Route::get('/index/Web4TarefaAgendamento',[Web4TarefaAgendamentoController::class,'index'])->name('Web4TarefaAgendamento.index');
Route::delete('/Web4TarefaAgendamento/{id}',[Web4TarefaAgendamentoController::class,'destroy'])->name('Web4TarefaAgendamento.delete');
Route::post('/Web4TarefaAgendamento/edit/{id}',[Web4TarefaAgendamentoController::class,'edit'])->name('Web4TarefaAgendamento.edit');
Route::put('/Web4TarefaAgendamento/update/{id}',[Web4TarefaAgendamentoController::class,'update'])->name('Web4TarefaAgendamento.update');

Route::get('/create/Web4TarefaCategoria',[Web4TarefaCategoriaController::class,'create'])->name('Web4TarefaCategoria.create');
Route::post('/create/Web4TarefaCategoria',[Web4TarefaCategoriaController::class,'create'])->name('Web4TarefaCategoria.create');
Route::post('/storeWeb4TarefaCategoria',[Web4TarefaCategoriaController::class,'store'])->name('Web4TarefaCategoria.store');
Route::get('/index/Web4TarefaCategoria',[Web4TarefaCategoriaController::class,'index'])->name('Web4TarefaCategoria.index');
Route::delete('/Web4TarefaCategoria/{id}',[Web4TarefaCategoriaController::class,'destroy'])->name('Web4TarefaCategoria.delete');
Route::post('/Web4TarefaCategoria/edit/{id}',[Web4TarefaCategoriaController::class,'edit'])->name('Web4TarefaCategoria.edit');
Route::put('/Web4TarefaCategoria/update/{id}',[Web4TarefaCategoriaController::class,'update'])->name('Web4TarefaCategoria.update');

Route::get('/create/Empresa',[EmpresaController::class,'create'])->name('Empresa.create');
Route::post('/create/Empresa',[EmpresaController::class,'create'])->name('Empresa.create');
Route::post('/store/Empresa',[EmpresaController::class,'store'])->name('Empresa.store');
Route::get('/index/mostrar_usuarios',[EmpresaController::class,'mostrar_usuarios_menu'])->name('Empresa.menu_usuario');
Route::get('/index/Empresa',[EmpresaController::class,'index'])->name('Empresa.index');
Route::delete('/Empresa/{id}',[EmpresaController::class,'destroy'])->name('Empresa.delete');
Route::post('/Empresa/edit/{id}',[EmpresaController::class,'edit'])->name('Empresa.edit');
Route::put('/Empresa/update/{id}',[EmpresaController::class,'update'])->name('Empresa.update');

Route::get('/create/Negocio',[NegocioController::class,'create'])->name('Negocio.create');
Route::post('/create/Negocio',[NegocioController::class,'create'])->name('Negocio.create');
Route::post('/store/Negocio',[NegocioController::class,'store'])->name('Negocio.store');
Route::get('/index/Negocio',[NegocioController::class,'index'])->name('Negocio.index');
Route::delete('/Negocio/{id}',[NegocioController::class,'destroy'])->name('Negocio.delete');
Route::post('/Negocio/edit/{id}',[NegocioController::class,'edit'])->name('Negocio.edit');
Route::put('/Negocio/update/{id}',[NegocioController::class,'update'])->name('Negocio.update');

Route::get('/create/Tarefa',[TarefaController::class,'create'])->name('Tarefa.create');
Route::post('/create/Tarefa',[TarefaController::class,'create'])->name('Tarefa.create');
Route::post('/store/Tarefa',[TarefaController::class,'store'])->name('Tarefa.store');
Route::get('/index/Tarefa',[TarefaController::class,'index'])->name('Tarefa.index');
Route::delete('/Tarefa/{id}',[TarefaController::class,'destroy'])->name('Tarefa.delete');
Route::post('/Tarefa/edit/{id}',[TarefaController::class,'edit'])->name('Tarefa.edit');
Route::put('/Tarefa/update/{id}',[TarefaController::class,'update'])->name('Tarefa.update');

Route::get('/create/Relatorio',[RelatorioController::class,'create'])->name('Relatorio.create');
Route::post('/create/Relatorio',[RelatorioController::class,'create'])->name('Relatorio.create');
Route::post('/store/Relatorio',[RelatorioController::class,'store'])->name('Relatorio.store');
Route::get('/index/Relatorio',[RelatorioController::class,'index'])->name('Relatorio.index');
Route::delete('/Relatorio/{id}',[RelatorioController::class,'destroy'])->name('Relatorio.delete');
Route::post('/Relatorio/edit/{id}',[RelatorioController::class,'edit'])->name('Relatorio.edit');
Route::put('/Relatorio/update/{id}',[RelatorioController::class,'update'])->name('Relatorio.update');



Route::get('/create/Web4Tarefa',[Web4TarefaController::class,'create'])->name('Web4Tarefa.create');
Route::post('/create/Web4Tarefa',[Web4TarefaController::class,'create'])->name('Web4Tarefa.create');
Route::post('/storeWeb4Tarefa',[Web4TarefaController::class,'store'])->name('Web4Tarefa.store');
Route::get('/index/Web4Tarefa',[Web4TarefaController::class,'index'])->name('Web4Tarefa.index');
Route::delete('/Web4Tarefa/{id}',[Web4TarefaController::class,'destroy'])->name('Web4Tarefa.delete');
Route::post('/Web4Tarefa/edit/{id}',[Web4TarefaController::class,'edit'])->name('Web4Tarefa.edit');
Route::put('/Web4Tarefa/update/{id}',[Web4TarefaController::class,'update'])->name('Web4Tarefa.update');

Route::get('/create/Web4TarefaMotivo',[Web4TarefaMotivoController::class,'create'])->name('Web4TarefaMotivo.create');
Route::post('/create/Web4TarefaMotivo',[Web4TarefaMotivoController::class,'create'])->name('Web4TarefaMotivo.create');
Route::post('/storeWeb4TarefaMotivo',[Web4TarefaMotivoController::class,'store'])->name('Web4TarefaMotivo.store');
Route::get('/index/Web4TarefaMotivo',[Web4TarefaMotivoController::class,'index'])->name('Web4TarefaMotivo.index');
Route::delete('/Web4TarefaMotivo/{id}',[Web4TarefaMotivoController::class,'destroy'])->name('Web4TarefaMotivo.delete');
Route::post('/Web4TarefaMotivo/edit/{id}',[Web4TarefaMotivoController::class,'edit'])->name('Web4TarefaMotivo.edit');
Route::put('/Web4TarefaMotivo/update/{id}',[Web4TarefaMotivoController::class,'update'])->name('Web4TarefaMotivo.update');

Route::get('/create/Web4TarefaResponsavel',[Web4TarefaResponsavelController::class,'create'])->name('Web4TarefaResponsavel.create');
Route::post('/create/Web4TarefaResponsavel',[Web4TarefaResponsavelController::class,'create'])->name('Web4TarefaResponsavel.create');
Route::post('/storeWeb4TarefaResponsavel',[Web4TarefaResponsavelController::class,'store'])->name('Web4TarefaResponsavel.store');
Route::get('/index/Web4TarefaResponsavel',[Web4TarefaResponsavelController::class,'index'])->name('Web4TarefaResponsavel.index');
Route::delete('/Web4TarefaResponsavel/{id}',[Web4TarefaResponsavelController::class,'destroy'])->name('Web4TarefaResponsavel.delete');
Route::post('/Web4TarefaResponsavel/edit/{id}',[Web4TarefaResponsavelController::class,'edit'])->name('Web4TarefaResponsavel.edit');
Route::put('/Web4TarefaResponsavel/update/{id}',[Web4TarefaResponsavelController::class,'update'])->name('Web4TarefaResponsavel.update');

