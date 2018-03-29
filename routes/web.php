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
    CRUD::resource('application', 'Admin\ApplicationCrudController');
    CRUD::resource('registration', 'Admin\ApplicationregistrationCrudController');

    CRUD::resource('pass', 'Admin\PassCrudController');
    CRUD::resource('passregister', 'Admin\PassregisterCrudController');
    CRUD::resource('monster', 'MonsterCrudController');
    CRUD::resource('student', 'Admin\StudentCrudController');
    CRUD::resource('studentapplicant', 'Admin\StudentapplicantCrudController');
    CRUD::resource('absence', 'Admin\AbsenceCrudController');

    CRUD::resource('application', 'Admin\ApplicationCrudController');


    CRUD::resource('balance', 'Admin\BalanceCrudController');
    CRUD::resource('expense', 'Admin\ExpenseCrudController');
    CRUD::resource('payment', 'Admin\PaymentCrudController');

    CRUD::resource('program', 'Admin\ProgramCrudController');

    CRUD::resource('passtype', 'Admin\PasstypeCrudController');
    CRUD::resource('user', 'Admin\UserCrudController');
    
});

Route::get('api/article', 'Api\ArticleController@index');
Route::get('api/article/{id}', 'Api\ArticleController@show');
