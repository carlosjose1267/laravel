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

Route::get('/nosotros' , function() {
		return view('nosotros');
	});
	
// creando las vistas ejercicio ajgallego
Route::get('/login' , function() {
		return view('login');
	});

Route::get('/logout' , function() {
		return view('logout');
	});

	Route::get('/catalog' , function() {
		return view('catalog');
	});
	
	Route::get('/catalog/show', function ()
	{
	return view('catalog/show', array('id' => 'Carlos'));
	
	});	
	
	Route::get('/catalog/create' , function () {
		return view('catalog/create');
	});

	
	Route::get('/catalog/edit', function ()
{
	return view('catalog/edit', array('id' => 'Carlos'));
});	
	
	//Route::get('Admin', 'Photos/AdminController@method');
	
	// rutas del controlador
/*	Route::get('/CatalogController' , function() {
		return view('CatalogController');
	});
	*/
	/*Route::get('/HomeController' , function() {
		return view('HomeController');
	});*/
	// definir la ruta del controlador
	Route::get('/', 'HomeController@getHome');
	Route::get('/', 'CatalogController@getCatalog');
	//Route::get('user/{id}', 'MoviesController@showProfile');
	
Route::get('/partials/navbar' , function() {
		return view('navbar', array('id' => 'Carlos'));
	});
	// Cargar datos como parametros
Route::get('/', function()
{
	return view('home', array('nombre' => 'Carlos'));
});	
	
Route::get('/layouts/master' , function() {
		return view('layouts/master');
	});	
	
	
//Route::get('user/{id}'), 'UserController@showProfile');	