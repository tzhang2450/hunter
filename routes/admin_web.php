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

$router->get('/', ['uses' => 'DefaultController@index']);
$router->get('/index', ['uses' => 'DefaultController@index']);
$router->get('/index.html', ['uses' => 'DefaultController@index']);
$router->get('/welcome.html', ['uses' => 'DefaultController@welcome']);
$router->get('/login', ['uses' => 'DefaultController@login']);
$router->get('/login.html', ['uses' => 'DefaultController@login']);
$router->get('/user/index/{type}.html', ['uses' => 'UserController@index', function($type){}]);
$router->get('/program/index.html', ['uses' => 'ProgramController@index']);
$router->get('/program/order.html', ['uses' => 'ProgramController@order']);
$router->get('/news/index/{type}.html', ['uses' => 'NewsController@index']);
$router->get('recruit/index.html', ['uses' => 'RecruitController@index']);
$router->get('recruit/resume.html', ['uses' => 'RecruitController@resume']);
$router->get('recruit/news/{type}.html', ['uses' => 'RecruitController@news']);
$router->get('recruit/offer.html', ['uses' => 'RecruitController@offer']);

$router->post('/signIn', 'DefaultController@signIn');