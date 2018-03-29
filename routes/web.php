<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/redirect', 'GoogleAuthController@redirect');
    Route::get('/callback', 'GoogleAuthController@callback');
});

Route::get('/', function () {
    //return redirect('admin');
    return view('welcome');
});

// --------------------
// Backpack\Demo routes
// --------------------
Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace'  => 'Admin',
], function () {
    // CRUD resources and other admin routes
    CRUD::resource('application', 'ApplicationCrudController');
    CRUD::resource('registration', 'ApplicationregistrationCrudController');

    CRUD::resource('pass', 'PassCrudController');
    CRUD::resource('passregister', 'PassregisterCrudController');
    CRUD::resource('monster', 'MonsterCrudController');
    CRUD::resource('student', 'StudentCrudController');
    CRUD::resource('studentapplicant', 'StudentapplicantCrudController');
    CRUD::resource('absence', 'AbsenceCrudController');

    CRUD::resource('application', 'ApplicationCrudController');


    CRUD::resource('balance', 'BalanceCrudController');
    CRUD::resource('expense', 'ExpenseCrudController');
    CRUD::resource('payment', 'PaymentCrudController');

    CRUD::resource('program', 'ProgramCrudController');

    CRUD::resource('passtype', 'PasstypeCrudController');
    CRUD::resource('user', 'UserCrudController');
    
});

Route::get('api/article', 'Api\ArticleController@index');
Route::get('api/article/{id}', 'Api\ArticleController@show');
