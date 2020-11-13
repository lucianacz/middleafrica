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

route::get("/angola", "paisesController@angola")->name("angola");

route::get("/cameroon", "paisesController@cameroon")->name("cameroon");

route::get("/central_African_Republic", "paisesController@centralAfricanRepublic")->name("central_African_Republic");

route::get("/chad","paisesController@chad")->name("chad");

route::get("/congo", "paisesController@congo")->name("congo");

route::get("/gabon","paisesController@gabon")->name("gabon");

route::get("/equatorial_Guinea","paisesController@equatorialGuinea")->name("equatorial_Guinea");

route::get("/nigeria","paisesController@Nigeria")->name("nigeria");

route::get("sao_Tome", "paisesController@saoTome")->name("sao_Tome");

route::get("/south_Sudan", "paisesController@southSudan")->name("south_Sudan");

route::get("/principe", "paisesController@principe")->name("principe");





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
