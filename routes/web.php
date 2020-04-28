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

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * FRONTEND SIDE route define...
 */
Route::group(['namespace' => 'Site', 'name' => 'site.'], function () {
    Route::get('/', 'SiteController@index')->name('index');
});

/**
 * DEFAULT AUTHENTICATE route define...
 */
//Auth::routes();

/**
 * CUSTOM AUTHENTICATE route define...
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Auth'], function () {
// Authentication Routes...
    Route::get('/', 'LoginController@showLoginForm')->name('login');
    Route::post('/', 'LoginController@login')->name('login');
    Route::post('logout', 'LoginController@logout')->name('logout');

// Registration Routes...
    if ($options['register'] ?? true) {
        Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'RegisterController@register')->name('register');
    }

});

/**
 * BACKEND SIDE route define...
 */
Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function () {
//    ADMIN DASHBOARD route...
    Route::get('/dashboard', 'AdminController@index')->name('dashboard');

//    PROFILE SECTION route...
    Route::prefix('profile')->namespace('Profile')->name('profile.')->group(function () {
        Route::get('/', 'ProfileController@index')->name('index');
        Route::get('show/{id}', 'ProfileController@show')->name('show');
        Route::post('store', 'ProfileController@store')->name('store');
        Route::get('create', 'ProfileController@create')->name('create');
        Route::get('edit/{id}', 'ProfileController@edit')->name('edit');
        Route::put('update/{id}', 'ProfileController@update')->name('update');
        Route::delete('delete/{id}', 'ProfileController@destroy')->name('delete');

    });

    //    SKILL SECTION route...
    Route::prefix('skill')->namespace('Skill')->name('skill.')->group(function () {
        Route::get('/', 'SkillController@index')->name('index');
        Route::get('show/{id}', 'SkillController@show')->name('show');
        Route::post('store', 'SkillController@store')->name('store');
        Route::get('create', 'SkillController@create')->name('create');
        Route::get('edit/{id}', 'SkillController@edit')->name('edit');
        Route::put('update/{id}', 'SkillController@update')->name('update');
        Route::delete('delete/{id}', 'SkillController@destroy')->name('delete');
        Route::get('status/{id}/{status}','SkillController@updateStatus')->name('status');

    });

    //    SERVICE SECTION route...
    Route::prefix('service')->namespace('Service')->name('service.')->group(function () {
        Route::get('/', 'ServiceController@index')->name('index');
        Route::get('show/{id}', 'ServiceController@show')->name('show');
        Route::post('store', 'ServiceController@store')->name('store');
        Route::get('create', 'ServiceController@create')->name('create');
        Route::get('edit/{id}', 'ServiceController@edit')->name('edit');
        Route::put('update/{id}', 'ServiceController@update')->name('update');
        Route::delete('delete/{id}', 'ServiceController@destroy')->name('delete');
        Route::get('status/{id}/{status}','ServiceController@updateStatus')->name('status');

    });

});



