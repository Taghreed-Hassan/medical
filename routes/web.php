<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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




########################## Start Routes WebSite ##########################

Route::group(
    ['namespace' => 'Site', 'prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

        ########## Strat Dashboard Themes ##########

        Route::get('/', function () {
            return view('website.home');
        });
        ########## End Dashboard Themes ##########

         ############  Start Route PatientController ############
         Route::resource('appointment', 'appointmentController');
         ############  End Route PatientController ############

    }
);

########################## End Routes WebSite ##########################




