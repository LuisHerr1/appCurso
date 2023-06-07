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

Route::get('/', function () {//si se enviaran mas de dos parametros entoces inmcluir{primerPARAM}/{segundoPARAM}
    return view('welcome');
});
Route::controller(CursoController::class)->group(function(){
    Route::get('cursos','cursos.index');
    Route::get('cursos','cursos.create');
    Route::get('cursos','cursos.show');

});
