<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\API\JugadorController;
use App\Http\Controllers\API\RegistroController;
use App\Http\Controllers\API\JuezController;
use App\Http\Controllers\API\DelegadoController;
use App\Http\Controllers\API\CampeonatoController;
use App\Http\Controllers\API\EquipoController;
use App\Http\Controllers\API\PersonaController;
use App\Http\Controllers\API\CategoriaController;
use App\Http\Controllers\API\RolController;
use App\Http\Controllers\API\EstadisticaController;
use App\Http\Controllers\API\PartidoController;
use App\Http\Controllers\API\ImagenesController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login',[AuthController::class,'login']);
Route::post('register',[AuthController::class,'register']);
Route::post('listar-registro',[AuthController::class,'show']);
//---------ruta de pre-registro
Route::post('/pre-registro', [RegistroController::class,'store']);

Route::group(['Middleware'=>'api'],function(){
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
    //---------rutas juez
    Route::get('/index', [JuezController::class,'index']);
    Route::post('/add-juez', [JuezController::class,'store']);
    Route::get('/listar-jueces', [JuezController::class,'show']);
    Route::put('/editar-juez/{id}', [JuezController::class,'update']);
    Route::delete('/eliminar-juez/{id}', [JuezController::class,'destroy']);
    //--------------registro
    Route::get('/index', [RegistroController::class,'index']);
    Route::get('/listar-registro/{id}', [RegistroController::class,'show']);
    Route::delete('/eliminar-registro/{id}', [RegistroController::class,'destroy']);
    //----------campeonato
    Route::get('/index-camp/{id}', [CampeonatoController::class,'index']);
    Route::post('/add-camp', [CampeonatoController::class,'store']);
    Route::get('/listar-camp',[CampeonatoController::class,'show']);
    Route::put('/editar-camp/{id}', [CampeonatoController::class,'update']);
    Route::delete('/eliminar-camp/{id}', [CampeonatoController::class,'destroy']);
    //-----------equipo
    Route::get('/index-equipo/{id}', [EquipoController::class,'index']);
    Route::post('/add-equipo', [EquipoController::class,'store']);
    Route::get('/listar-equipo',[EquipoController::class,'show']);
    Route::get('/equipos/{id}',[EquipoController::class,'viewId']);
    Route::put('/editar-equipo/{id}', [EquipoController::class,'update']);
    Route::delete('/eliminar-equipo/{id}', [EquipoController::class,'destroy']);
    Route::get('/listar-por-delegado/{id_delegado}',[EquipoController::class,'porDelegado']);
    //---------persona
    Route::get('/listar-delegado/{id}',[PersonaController::class,'delegado']);
    Route::get('/listar-jugador/{id}',[PersonaController::class,'jugador']);
    Route::get('/index-per/{id}', [PersonaController::class,'index']);
    Route::post('/add-persona', [PersonaController::class,'store']);
    Route::get('/listar-persona',[PersonaController::class,'show']);
    Route::get('/listar-delegado',[PersonaController::class,'listarDelegado']);
    Route::get('/listar-jugador',[PersonaController::class,'listarJugador']);
    Route::get('/buscar/{nombre},{apellido}',[PersonaController::class,'buscar']);
    Route::put('/editar-persona/{id}', [PersonaController::class,'update']);
    Route::delete('/eliminar-persona/{id}', [PersonaController::class,'destroy']);
    //---------Categoria
    Route::get('/index-cat/{id}', [CategoriaController::class,'index']);
    Route::post('/add-categoria', [CategoriaController::class,'store']);
    Route::get('/listar-categorias',[CategoriaController::class,'show']);
    //---------Rol
    Route::post('/add-rol', [RolController::class,'store']);
    Route::get('/listar-rol',[RolController::class,'show']);
    //----------Estadisticas
    Route::post('/add-estadistica', [EstadisticaController::class,'store']);
    Route::get('/listar-estadisticas',[EstadisticaController::class,'show']);
    //----------Partidos
    Route::post('/add-partido', [PartidoController::class,'store']);
    Route::get('/listar-partidos',[PartidoController::class,'show']);
    Route::get('/listar-partidoActivo',[PartidoController::class,'partidoActivo']);
    //----------cargarImagen
    Route::post('add-imagen', [ImagenesController::class, 'upload']);
    Route::get('listar-imagen', [ImagenesController::class, 'download']);
});
