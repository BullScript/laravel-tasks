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

        /** Client Admin Panel Users are allow */
        Route::group(['middleware' => ['clientadmin'] ], function () {

            Route::post('/tasks/add-note/{id}', 'Client\TaskController@postNote');

            Route::resources([
                'projects' => 'Client\ProjectController',
                'sprints' => 'Client\SprintController',
                'tasks' => 'Client\TaskController',
            ]);

            Route::resources([
                'task-meterics' => 'Client\TaskMetricController',
                'settings' => 'Client\SettingController',
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
