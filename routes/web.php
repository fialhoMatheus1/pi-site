<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DipositivoController;
use App\Http\Controllers\LojaController;

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

//Homepage:
Route::get('/',[HomeController::class,'Home'])->name('home');

//Tela da Loja:
Route::get('/loja',[LojaController::class,'MostrarLoja'])->name('loja');


////////////////////////////////////////Usuário////////////////////////////////////////
//Tela de Login do User:
Route::get('/login',[UserController::class,'MostrarLoginUser'])->name('login');

//Autenticacao do login:

//Tela de cadastro User:
Route::get('/cadastrar-usuario',[UserController::class,'MostrarCadastroUser'])->name('cadastrar-usuario');

//Salvar dados do user no banco:
Route::post('/cadastrar-usuario',[UserController::class,'SalvarBancoUsuario'])->name('salvar-banco-usuario');

//Tela de editar usuario:
Route::get('/editar-usuario',[UserController::class,'MostrarEditarUsuario'])->name('editar-usuario');

//Botao editar dados do usuario:


//Tela alterar dados do usuario:
Route::get('/alterar-usuario/{registrosFinaisUsuario}',[UserController::class,'MostrarAlterarUsuario'])->name('alterar-usuario');

//Salvar alteracao de dados do user no banco:
Route::put('/editar-usuario/{registrosFinaisUsuario}',[UserController::class, 'AlterarBancoUsuario'])->name('alterar-banco-usuario');


////////////////////////////////////////Dispositivo////////////////////////////////////////
//Tela de cadastro dispositivo:
Route::get('/dispositivo',[DipositivoController::class,'MostrarCadastroDispositivo'])->name('dispositivo');

//Salvar dados do dispositivo no banco:
Route::post('/dispositivo',[DipositivoController::class,'SalvarBancoDispositivo'])->name('salvar-banco-dispositivo');



////////////////////////////////////////Sensor////////////////////////////////////////
Route::get('/sensor',[SensorController::class,'MostrarSensor'])->name('sensor');
