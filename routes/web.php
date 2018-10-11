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


Route::get('/lineamientosestrategicos', function () {
    return view('nuestra_empresa/lineamientosestrategicos');
});

Route::get('/nuestrosvalores', function () {
    return view('nuestra_empresa/nuestrosvalores');
});


Route::get('/nuestraimagen', function () {
    return view('nuestra_empresa/nuestraimagen');
});


Route::get('/imagenpersonal', function () {
    return view('nuestra_empresa/imagenpersonal');
});


Route::get('/codigo', function () {
    return view('nuestra_empresa/codigo');
});


Route::get('/presentacioncodigo', function () {
    return view('nuestra_empresa/presentacioncodigo');
});


Route::get('/sarlaft', function () {
    return view('nuestra_empresa/sarlaft');
});


Route::get('/contratacion', function () {
    return view('nuestra_empresa/contratacion');
});



Route::get('/politica_vacaciones', function () {
    return view('nuestra_empresa/politica_vacaciones');
});


Route::get('/politica_gastoadmin', function () {
    return view('nuestra_empresa/politica_gastoadmin');
});


Route::get('/politica_contratacion', function () {
    return view('nuestra_empresa/politica_contratacion');
});


Route::get('/politica_seguridadinfo', function () {
    return view('nuestra_empresa/politica_seguridadinfo');
});


Route::get('/politica_ambiental', function () {
    return view('nuestra_empresa/politica_ambiental');
});



///////////////// TALENTO HUMANO /////////////////////7


Route::get('/reglamento_trabajo', function () {
    return view('talento_humano/reglamento_trabajo');
});


Route::get('/seguridad_salud', function () {
    return view('talento_humano/seguridad_salud');
});


Route::get('/higiene_seguridad', function () {
    return view('talento_humano/higiene_seguridad');
});

Route::get('/copasst', function () {
    return view('talento_humano/copasst');
});


Route::get('/comite_convivencia', function () {
    return view('talento_humano/comite_convivencia');
});


Route::get('/tecnofarma', function () {
    return view('talento_humano/tecnofarma');
});


Route::get('/brigadas_emergencia', function () {
    return view('talento_humano/brigadas_emergencia');
});


Route::get('/politicas_sst', function () {
    return view('talento_humano/politicas_sst');
});


Route::get('/galeria', function () {
    return view('talento_humano/galeria');
});


Route::get('/manual_nomina', function () {
    return view('talento_humano/manual_nomina');
});


Route::get('/formatos_talentohumano', function () {
    return view('talento_humano/formatos_talentohumano');
});













Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
