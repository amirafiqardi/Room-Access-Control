<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Account;

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
    return redirect('/login');
});

Route::get('/check/{id}/{room_id}', 'api\cekcontroller@check');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', 'DashboardController@index')->name('admin-dashboard');
        Route::resource('transactions', 'TransactionController');
        Route::resource('rooms', 'RoomController');
        Route::resource('schedules', 'ScheduleController');
        Route::resource('users', 'UserController');
        Route::resource('classes', 'ClassesController');
        Route::resource('guests', 'GuestController');
        Route::resource('home', 'HomeController');
        Route::resource('loans', 'LoanController');
        Route::resource('admin', 'DashboardAdminController');
        
    });

Route::group(['middleware' => 'auth'], function () {
    //Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('dashboard-transactions', 'DashboardTransactionController');
    Route::resource('dashboard', 'DashboardController');
    Route::resource('dashboard-loans', 'DashboardLoanController');
    
});
