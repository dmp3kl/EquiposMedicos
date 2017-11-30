<?php
 use Illuminate\Support\Facades\Mail;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


$data = [
	'titulo' => 'Requerimiento',
	'sujeto' => 'Sebastián Miranda',
	'fecha' => '20-11-2017',
	'area' => 'Informática',
	'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. .'

];


    Mail::send('Form.mail', $data, function($message){
    	$message->to('se.miranda86@gmail.com', 'Sebastian')->subject('Solicitud');
    });