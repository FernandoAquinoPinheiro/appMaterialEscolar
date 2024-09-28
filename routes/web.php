<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TblMaterialEscolarController;

Route::get('/',[TblMaterialEscolarController::class,'MostrarHome'])->name('home-adm');
//para cadastrar
Route::post('/cadastro-Material',[TblMaterialEscolarController::class,'CadastrarMaterial'])->name('cadastra-Material');
Route::get('/cadastro-Material',[TblMaterialEscolarController::class,'MostrarCadastroMaterial'])->name('show-cadastro-Matrial');
