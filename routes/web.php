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

Route::get('laravel-version', function()
{
$laravel = app();
return "Your Laravel version is ".$laravel::VERSION;
});

Route::get('/', function () {
    return redirect('admin');
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
    CRUD::resource('monster', 'MonsterCrudController');
    CRUD::resource('application', 'ApplicationCrudController');
    CRUD::resource('program', 'ProgramCrudController');
    CRUD::resource('registration', 'ApplicationRegistrationCrudController');
    CRUD::resource('medical', 'ApplicationMedicalCrudController');
    CRUD::resource('dorm', 'ApplicationDormCrudController');
    CRUD::resource('passregister', 'PassregisterCrudController');
    CRUD::resource('pass', 'PassCrudController');
    CRUD::resource('absence', 'AbsenceCrudController');
    CRUD::resource('teamdcdepartment', 'Admin\TeamdcdepartmentCrudController');
    CRUD::resource('teamdcassignment', 'Admin\TeamdcassignmentCrudController');
    CRUD::resource('comment', 'Admin\StudentcommentCrudController');
});

Route::get('api/article', 'Api\ArticleController@index');
Route::get('api/article/{id}', 'Api\ArticleController@show');
