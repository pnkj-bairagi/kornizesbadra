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

/*front end pages*/
Route::get('/', function () {
    return view('Frontend.home');
});

Route::get('/framestyles', function () {
    return view('Frontend.framestyles');
});

Route::get('/about', function () {
    return view('Frontend.about');
});

Route::get('/help', function () {
    return view('Frontend.help');
});
Route::get('/contact', function () {
    return view('Frontend.contact');
});
Route::get('/account', function () {
    return view('Frontend.account');
});
Route::get('/disclaimers', function () {
    return view('Frontend.disclaimers');
});
Route::get('/guide', function () {
    return view('Frontend.guide');
});
Route::get('/password_reset', function () {
    return view('Frontend.password_reset');
});
Route::get('/privacy', function () {
    return view('Frontend.privacy');
});
Route::get('/returns', function () {
    return view('Frontend.returns');
});
Route::get('/reviews', function () {
    return view('Frontend.reviews');
});
Route::get('/signup', function () {
    return view('Frontend.signup');
});
Route::get('/terms', function () {
    return view('Frontend.terms');
});


/*front end pages*/

/*admin login */

Route::get('admin/login', 'App\Http\Controllers\LoginController@login')->name('login');

Route::post('admin/login_submit', 'App\Http\Controllers\LoginController@loginSubmit')->name('login.submit');
Route::get('admin/forget_password', 'App\Http\Controllers\LoginController@forgetPassword')->name('forgetpassword');

Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->group(function(){
    Route::group(['middleware' => ['auth']], function() {
        /*Dashboard*/
        Route::get('/dashboard', 'HomeController@index')->name('dashboard');
        Route::get('/profile', 'HomeController@adminProfile')->name('profile');
        Route::get('/setting', 'HomeController@adminSetting')->name('setting');
        Route::get('/reviews', 'HomeController@reviews')->name('reviews');
        
        /*Users*/
        Route::get('/users', 'HomeController@users')->name('users');
        Route::get('/user-delete/{id}', 'HomeController@destroy_user')->name('user_destroy');
        /*Users*/
        
        /*Material*/
        Route::resource('material', 'MaterialController');
        Route::post('/update-material/{material}', 'MaterialController@update')->name('material.update');
        /*Material*/
        
        /*Color*/
        Route::resource('color', 'ColorController');
        Route::post('/update-color/{color}', 'ColorController@update')->name('color.update');
        /*Material*/
        
        /*Style*/
        Route::resource('style', 'StyleController');
        Route::post('/update-style/{style}', 'StyleController@update')->name('style.update');
        /*Style*/
        
        /*Thickness*/
        Route::resource('thickness', 'ThicknessController');
        Route::post('/update-thickness/{thickness}', 'ThicknessController@update')->name('thickness.update');
        /*Thickness*/
        
        
        /*Products*/
        Route::resource('products', 'ProductsController');
        
        
        Route::name('adminlogout')->get('/logout',function(){
            Auth::logout();
            return Redirect::route('login');
        });
    });    
});

/*admin login */


