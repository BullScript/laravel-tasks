<?php

use Illuminate\Support\Facades\Route;

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

/** visitors are allow */

Route::group(['middleware' => ['web']], function () {

    Auth::routes();

    /** Authorised Users are allow */
    Route::group(['middleware' => ['auth']], function () {

        Route::resources([
            'clients' => 'Admin\TaskController',
        ]);

        /** Client Admin Panel Users are allow */
        Route::group(['middleware' => ['clientadmin'], 'prefix' => '/client' ], function () {

            Route::resources([
                'clients' => 'Client\TaskMetricController',
            ]);
        });

        /** Only BullScript Users are allow */
        Route::group(['middleware' => ['superadmin'], 'prefix' => '/admin' ], function () {

            Route::resources([
                'clients' => 'Admin\ClientController',
            ]);
        });
    });
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/doc', function () {
    return view('documentation.index');
});

Route::get('/tasks', function () {
    return view('tasks.index');
});

Route::get('/tasks/create', function () {
    return view('layouts.index');
});

Route::get('/home', 'HomeController@index')->name('home');
