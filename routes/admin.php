<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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


Auth::routes();
####################### Start Routes AdminPanel #######################

Route::group(
    ['namespace' => 'Admin', 'prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']],
    function () {


        Route::prefix('admin')->group(function () {


            ############  Start Route view AdminController ############
            Route::get('admin', function () {
                return view('admin.empty');
            });
            ############  End Route view AdminController ############


            ############  Start Route ServicesCintroller ############
            Route::resource('Services', 'ServicesController');
            ############  End Route ServicesCintroller ############
           


            // End Routes
            Route::get('/{page}', 'AdminController@index');
        });
    }
);


####################### End Routes AdminPanel #######################
