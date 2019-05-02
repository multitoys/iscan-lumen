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

$router->get('/', 'MainController@index');
$router->get('order', [
    'as'   => 'order.index',
    'uses' => 'OrderController@index',
]);
$router->get('order/create', [
    'as'   => 'order.create',
    'uses' => 'OrderController@create',
]);
$router->get('order/{id}/edit', [
    'as'   => 'order.edit',
    'uses' => 'OrderController@edit',
]);
$router->put('order/{id}/update', [
    'as'   => 'order.update',
    'uses' => 'OrderController@update',
]);
$router->get('client/search', [
    'as'   => 'client.search',
    'uses' => 'ClientController@searchClients',
]);