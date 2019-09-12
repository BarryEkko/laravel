<?php

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
use Illuminate\http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('somar/{n1}/{n2}', 'contas@somar');
Route::get('subtrair/{n1}/{n2}', 'contas@subtrair');
Route::get('multiplicar/{n1}/{n2}', 'contas@multiplicar');
Route::get('dividir/{n1}/{n2}', 'contas@dividir');
Route::get('quadrado/{n1}', 'contas@quadrado');
