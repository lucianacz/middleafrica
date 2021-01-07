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

Route::get('/', function () {
    return view('welcome');
});




route::get("/paises", "paisesController@listadoPaises")->name("paises");

route::get("/angola", "paisesController@angola")->name("Angola");

route::get("/cameroon", "paisesController@cameroon")->name("Cameroon");

route::get("/central_African_Republic", "paisesController@centralAfricanRepublic")->name("central_African_Republic");

route::get("/republic_of_Congo", "paisesController@republicCongo")->name("Republic_of_Congo");

route::get("/chad","paisesController@chad")->name("Chad");

route::get("/democratic_Republic_of_Congo", "paisesController@democraticRepublicCongo")->name("Democratic_Republic_of_Congo");

route::get("/gabon","paisesController@gabon")->name("Gabon");

route::get("/equatorial_Guinea","paisesController@equatorialGuinea")->name("Equatorial_Guinea");

route::get("/nigeria","paisesController@Nigeria")->name("Nigeria");

route::get("/sao_Tome", "paisesController@saoTome")->name("Sao_Tome");

route::get("/south_Sudan", "paisesController@southSudan")->name("South_Sudan");

route::get("/principe", "paisesController@principe")->name("Principe");





Route::group(['middleware' => 'auth'], function () {

    route::get("/festivales", "festivalesController@listadoFestivales");

    route::get("/cargarFotosFestivales/{id}", "festivalesController@editarFestivales");

    route::post("/cargarFotosFestivales/{id}","festivalesController@cargarFotosFestival");

    route::get("/hospedaje", "hospedajeController@listadoHospedajes");

    route::get("/cargarFotosHospedajes/{id}", "hospedajeController@editarHospedajes");

    route::post("/cargarFotosHospedajes/{id}","hospedajeController@cargarFotosHospedajes");

    route::get("/lugaresTuristicos", "lugaresTuristicosController@listadoLugaresTuristicos");

    route::get("/cargarFotosLugaresTuristicos/{id}", "lugaresTuristicosController@editarLugaresTuristicos");

    route::post("/cargarFotosLugaresTuristicos/{id}","lugaresTuristicosController@cargarFotosLugaresTuristicos");

    route::get("/tribus", "tribuController@listadoTribus")->middleware("auth");

    route::get("/cargarFotosTribu/{id}", "tribuController@editarTribu");

    route::post("/cargarFotosTribu/{id}", "tribuController@cargarFotos");

    route::get("/naturaleza","naturalezacontroller@listadoNaturaleza");

    route::get("/cargarFotosNaturaleza/{id}","naturalezaController@editarNaturaleza");

    route::post("cargarFotosNaturaleza/{id}", "naturalezaController@cargarFotosNaturaleza");

    route::get("/highlights", "highlightController@listado");

    route::get("/cargarIconos/{id}","highlightController@editarIconos");

    route::post("cargarIconos/{id}", "highlightController@cargarIconos");

});



Auth::routes(['register' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'paisesController@index');

