<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('home' , function(){

   return 'allo' ;
});

$app->get('request' ,function(Illuminate\Http\Request $request){

  // return "hello" . $request->get('name' , 'strnager');

    return (new Illuminate\Http\Response('Hello stranger', 200))
    ->header('Content-Type', 'text/plain');

});

/**
 * Routes for resource appointments
 */
$app->get('appointments', 'AppointmentsController@all');
$app->get('appointments/{id}', 'AppointmentsController@get');
$app->post('appointments', 'AppointmentsController@add');
$app->put('appointments/{id}', 'AppointmentsController@put');
$app->delete('appointments/{id}', 'AppointmentsController@remove');
