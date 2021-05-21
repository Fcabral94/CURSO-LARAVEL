<?php

use App\Http\Controllers\PeliculaController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\CrapIndex;

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
  return view('welcome');
});

Route::get('/pelicula', 'PeliculaController@index');

Route::get("/formulario", "Peliculacontroller@formulario");
Route::post("/recibir", "Peliculacontroller@recibir");
Route::get("/frutas","FrutaController@index");
Route::get("/detallefrutas","FrutaController@detail");
Route::get("/create","FrutaController@create");
Route::post("/save","FrutaController@save");


 /*
Route::get('/listado-peliculas', function () {
  $titulo = "listado de peliculas";
  $listado = array("batman","spiderman","grand torino");
  
  return view ("peliculas.listado")
  ->with("titulo", $titulo)
  ->with("listado", $listado);
  
  });
  

*/
