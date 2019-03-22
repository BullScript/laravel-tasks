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

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    /** Authorised Users are allow */
    Route::group(['middleware' => ['auth']], function () {

        Route::get('/dashboard', 'Client\DashboardController@index')->name('dashboard');

        Route::resources([
            'projects' => 'Client\ProjectController',
        ]);

        Route::resources([
            'sprints' => 'Client\SprintController',
        ]);

        /** Client Admin Panel Users are allow */
        Route::group(['middleware' => ['clientadmin'] ], function () {

            Route::resources([
                'profiles' => 'Client\ProfileController',
            ]);

            Route::resources([
                'task-meterics' => 'Client\TaskMetricController',
            ]);

            Route::resources([
                'settings' => 'Client\SettingController',
            ]);

            Route::resources([
                'tickets' => 'Client\TicketController',
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

Route::get('/home', 'HomeController@index')->name('home');
