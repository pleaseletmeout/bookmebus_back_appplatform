<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\operatorController;
use App\Http\Controllers\routeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\locationController;
use App\Http\Controllers\scheduleController;

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
    return view('home');
})->name('home');

Route::get('/login', [loginController::class,'show_login_form'])->name('login');
Route::post('/login', [loginController::class,'process_login'])->name('login');
Route::post('/logout', [loginController::class,'logout'])->name('logout');




Route::group(["middleware" => ["auth"]], function(){
    Route::get('/admin/dashboard',[dashboardController::class, 'show_dashboard']);
    Route::get('/admin/dashboard/payment',[dashboardController::class, 'show_payment']);
    
    // Route::get('/admin/dashboard/schedule',[dashboardController::class, 'show_schedule']);

    //operator start
    Route::get('/admin/dashboard/operator',
        [operatorController::class, 'show_operator']
    );
    Route::post('/admin/dashboard/saveOperator',
        [operatorController::class, 'add_operator']
    );
    Route::put('/admin/dashboard/updateOperator/{id}',
        [operatorController::class, 'update_operator']
    );
    Route::get('/admin/dashboard/deleteOperator/{id}',
        [operatorController::class, 'delete_operator']
    );
    //end operator

    //route start
    Route::get('/admin/dashboard/route',
        [routeController::class, 'show_route']
    );
    Route::post('/admin/dashboard/saveRoute',
        [routeController::class, 'add_route']
    );
    Route::put('/admin/dashboard/updateRoute/{id}',
        [routeController::class, 'update_route']
    );
    Route::get('/admin/dashboard/deleteRoute/{id}',
        [routeController::class, 'delete_route']
    );
    //end route

    //user start
    Route::get('/admin/dashboard/users',[userController::class, 'show_user']);
    //end user

    //location start
    Route::get('/admin/dashboard/location',[locationController::class, 'show_location']);
    Route::post('/admin/dashboard/saveLocation',
        [locationController::class, 'add_location']
    );
    Route::put('/admin/dashboard/updateLocation/{id}',
        [locationController::class, 'update_location']
    );
    Route::get('/admin/dashboard/deleteLocation/{id}',
        [locationController::class, 'delete_location']
    );
    //end location

    //schedule start
    Route::post('/admin/dashboard/addSchedule', [scheduleController::class, 'addSchedule']);
    Route::get('/admin/dashboard/schedule', [scheduleController::class, 'schedulePage']);
    Route::put('/admin/dashboard/updateSchedule/{id}', [scheduleController::class, 'update_schedule']);
    Route::get('/admin/dashboard/deleteSchedule/{id}', [scheduleController::class, 'delete_schedule']);

    //schedule end
});


