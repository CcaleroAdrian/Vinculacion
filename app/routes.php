<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

//nos mostrar el formulario de login
Route::get('login', array('uses' => 'HomeController@showLogin'));
//validares los datos de inicio de sesión
Route::post('login',array('uses'=>'HomeController@doLogin'));
//cierre de sesión
Route::get('logout', array('uses' => 'HomeController@doLogout'));


# Route::group(array('before' => 'auth'), function(){
//para la proteccion de los recursos debemos colocar todo dentro de un grupo

Route::model('dependencies','Dependency');
Route::model('educative','EducativeProgram');
Route::model('group','Group');
Route::model('program','ProgramFact');
Route::model('progress','Progress');


Route::resource('dependencies','DependenciesController');
Route::resource('EducativePrograms','EducativeProgramsController');
Route::resource('Group','GroupsController');
Route::resource('Progress','ProgressesController');
Route::resource('ProgramFact','ProgramFactsController'); 
Route::resource('student','StudentsController');
Route::resource('Tutor','TutorsController'); 
#});//cierre de la seguridad de recursos

