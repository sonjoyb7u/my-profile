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

 Route::get('/welcome', function () {
     return view('welcome');
 });

 Route::get('/customer', 'Admin\Customer\CustomerController@index')->name('customer');
 Route::get('/customer-read', 'Admin\Customer\CustomerController@read')->name('customer-read');
 Route::post('/customer', 'Admin\Customer\CustomerController@store');
 Route::get('/customer-edit/{id}', 'Admin\Customer\CustomerController@edit')->name('customer-edit');
 Route::post('/customer-update/{id}', 'Admin\Customer\CustomerController@update')->name('customer-update');

/**
 * << ================================================================================ >>
 */

/**
 * FRONTEND SIDE route define...
 */
Route::namespace('Site')->name('site.')->group(function () {
    Route::get('/', 'SiteController@index')->name('index');

    // Contact Form Route...
    Route::group(['prefix'=>'contact', 'as'=>'contact.'], function () {
        Route::post('/', 'SiteController@store')->name('store');
    });


});

/**
 * DEFAULT AUTHENTICATE route define...
 */

// Auth::routes();


/**
 * CUSTOM AUTHENTICATE route define...
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Auth'], function () {
// Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login')->name('login');
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
Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {
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

    //    SLIDER SECTION route...
    Route::prefix('slider')->namespace('Slider')->name('slider.')->group(function () {
        Route::get('/', 'SliderController@index')->name('index');
        Route::get('show/{id}', 'SliderController@show')->name('show');
        Route::post('store', 'SliderController@store')->name('store');
        Route::get('create', 'SliderController@create')->name('create');
        Route::get('edit/{id}', 'SliderController@edit')->name('edit');
        Route::put('update/{id}', 'SliderController@update')->name('update');
        Route::delete('delete/{id}', 'SliderController@destroy')->name('delete');
        Route::get('status/{id}/{status}','SliderController@updateStatus')->name('status');

    });

    //    URL LINK SECTION route...
    Route::prefix('url-link')->namespace('Url')->name('url-link.')->group(function () {
        Route::get('/', 'UrlController@index')->name('index');
        Route::get('show/{id}', 'UrlController@show')->name('show');
        Route::post('store', 'UrlController@store')->name('store');
        Route::get('create', 'UrlController@create')->name('create');
        Route::get('edit/{id}', 'UrlController@edit')->name('edit');
        Route::put('update/{id}', 'UrlController@update')->name('update');
        Route::delete('delete/{id}', 'UrlController@destroy')->name('delete');
        Route::get('status/{id}/{status}','UrlController@updateStatus')->name('status');

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

    //    CATEGORY SECTION route...
    Route::prefix('category')->namespace('Work\Category')->name('category.')->group(function () {
        Route::get('/', 'CategoryController@index')->name('index');
        Route::get('show/{id}', 'CategoryController@show')->name('show');
        Route::post('store', 'CategoryController@store')->name('store');
        Route::get('create', 'CategoryController@create')->name('create');
        Route::get('edit/{id}', 'CategoryController@edit')->name('edit');
        Route::put('update/{id}', 'CategoryController@update')->name('update');
        Route::delete('delete/{id}', 'CategoryController@destroy')->name('delete');
        Route::get('status/{id}/{status}','CategoryController@updateStatus')->name('status');

    });

    //    PROJECT SECTION route...
    Route::prefix('project')->namespace('Work\Project')->name('project.')->group(function () {
        Route::get('/', 'ProjectController@index')->name('index');
        Route::get('show/{id}', 'ProjectController@show')->name('show');
        Route::post('store', 'ProjectController@store')->name('store');
        Route::get('create', 'ProjectController@create')->name('create');
        Route::get('edit/{id}', 'ProjectController@edit')->name('edit');
        Route::put('update/{id}', 'ProjectController@update')->name('update');
        Route::delete('delete/{id}', 'ProjectController@destroy')->name('delete');
        Route::get('status/{id}/{status}','ProjectController@updateStatus')->name('status');

    });

    //    CLIENT SECTION route...
    Route::prefix('client')->namespace('Client')->name('client.')->group(function () {
        Route::get('/', 'ClientController@index')->name('index');
        Route::get('show/{id}', 'ClientController@show')->name('show');
        Route::post('store', 'ClientController@store')->name('store');
        Route::get('create', 'ClientController@create')->name('create');
        Route::get('edit/{id}', 'ClientController@edit')->name('edit');
        Route::put('update/{id}', 'ClientController@update')->name('update');
        Route::delete('delete/{id}', 'ClientController@destroy')->name('delete');
        Route::get('status/{id}/{status}','ClientController@updateStatus')->name('status');

    });

    //    BLOG-CATEGORY SECTION route...
    Route::prefix('blog-category')->namespace('Blog\Category')->name('blog-category.')->group(function () {
        Route::get('/', 'CategoryController@index')->name('index');
        Route::get('show/{id}', 'CategoryController@show')->name('show');
        Route::post('store', 'CategoryController@store')->name('store');
        Route::get('create', 'CategoryController@create')->name('create');
        Route::get('edit/{id}', 'CategoryController@edit')->name('edit');
        Route::put('update/{id}', 'CategoryController@update')->name('update');
        Route::delete('delete/{id}', 'CategoryController@destroy')->name('delete');
        Route::get('status/{id}/{status}','CategoryController@updateStatus')->name('status');

    });

    //    BLOG-POST SECTION route...
    Route::prefix('blog-post')->namespace('Blog\Post')->name('blog-post.')->group(function () {
        Route::get('/', 'PostController@index')->name('index');
        Route::get('show/{id}', 'PostController@show')->name('show');
        Route::post('store', 'PostController@store')->name('store');
        Route::get('create', 'PostController@create')->name('create');
        Route::get('edit/{id}', 'PostController@edit')->name('edit');
        Route::put('update/{id}', 'PostController@update')->name('update');
        Route::delete('delete/{id}', 'PostController@destroy')->name('delete');
        Route::get('status/{id}/{status}','PostController@updateStatus')->name('status');

    });

    //    CONTACT FORM SECTION route...
    Route::prefix('contact')->namespace('contact')->name('contact.')->group(function () {
        Route::get('/', 'ContactFormController@index')->name('index');
        Route::get('show/{id}', 'ContactFormController@show')->name('show');
        Route::post('store', 'ContactFormController@store')->name('store');
        Route::get('create', 'ContactFormController@create')->name('create');
        Route::get('edit/{id}', 'ContactFormController@edit')->name('edit');
        Route::put('update/{id}', 'ContactFormController@update')->name('update');
        Route::delete('delete/{id}', 'ContactFormController@destroy')->name('delete');
        Route::get('status/{id}/{status}','ContactFormController@updateStatus')->name('status');

    });

});



