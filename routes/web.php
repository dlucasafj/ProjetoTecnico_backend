<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\FederacaoController;
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


Route::get('/', function(){
    return view('ecompjr/ecompjr');
});

// Route::get('/',[EmpresaController::class,'getAllEmpresa']);
Route::get('/empresa',[EmpresaController::class,'getAllEmpresa']);
Route::get('/federacao/create',[FederacaoController::class,'create']);
Route::post('/federacao',[FederacaoController::class, 'store']);

Route::get('/federacao/listFederacao',[FederacaoController::class,'lista']);
Route::get('/federacao/listFederacao',[FederacaoController::class,'getFederacao']);
Route::get('/federacao/listEmpFed',[FederacaoController::class,'empLista']);
Route::get('/federacao/listEmpFed',[FederacaoController::class,'pesquisaEmp']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('ecompjr/ecompjr');
})->name('ecompjr');


Route::get('/empresas/create',[EmpresaController::class,'create']);
Route::post('/empresas',[EmpresaController::class,'store']);

