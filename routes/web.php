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


Route::get('/',[EmpresaController::class,'getAllEmpresa' ]);
Route::get('/home',[EmpresaController::class,'getAllEmpresa']);
Route::get('/federacao/create',[FederacaoController::class,'create']);
Route::post('/federacao',[FederacaoController::class, 'store']);

Route::get('/federacao/listEmpresa',[FederacaoController::class,'lista']);
Route::get('/federacao/listEmpresa',[FederacaoController::class,'getFederacao']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/empresas/create',[EmpresaController::class,'create']);
Route::post('/empresas',[EmpresaController::class,'store']);
