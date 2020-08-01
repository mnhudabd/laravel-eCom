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

Route::group(['namespace' => 'Frontend'], function(){
	Route::get('/', 'HomeController@showHomePage')->name('frontend.home');
	Route::get('/product/{slug}', 'ProductController@showDetails')->name('product.details');
	
	Route::get('/cart', 'CartController@showCart')->name('cart.show');
	Route::post('/cart', 'CartController@addToCart')->name('cart.add');
	Route::post('/cart/remove', 'CartController@removeFromCart')->name('cart.remove');
	Route::get('/cart/clear', 'CartController@clearCart')->name('cart.clear');
	
	Route::get('/checkout', 'CartController@checkout')->name('checkout');

	Route::get('/login', 'AuthController@showLoginForm')->name('login');
	Route::post('/login', 'AuthController@processLogin');

	Route::get('/register', 'AuthController@showRegisterForm')->name('register');
	Route::post('/register', 'AuthController@processRegister');

	Route::get('/activate/{token}', 'AuthController@activate')->name('activate');

	Route::group(['middleware' => 'auth'], function() {

		Route::post('/order', 'CartController@processOrder')->name('order');

		Route::get('/order/{id}', 'CartController@showOrder')->name('order.details');


		Route::get('/profile', 'AuthController@profile')->name('profile');
		Route::get('/logout', 'AuthController@logout')->name('logout');

	});


	
});

/* ---------BackEnd ----------  */

Route::group(['namespace' => 'Backend'], function(){

	Route::get('/admin', 'AdminController@index')->name('admin');
	Route::get('/logout', 'SuperAdminController@superAdmin')->name('logout');
	Route::get('/dashboard', 'AdminController@showDashboard')->name('dashboard');
	Route::post('/admin-dashboard', 'AdminController@dashboard')->name('admin-dashboard');

	Route::get('/add-category', 'CategoryController@index')->name('add-category');
	Route::get('/all-category', 'CategoryController@allCategory')->name('all-category');
	Route::post('/save-category', 'CategoryController@saveCategory')->name('save-category');
	Route::get('/inactive_category/{id}', 'CategoryController@inactiveCategory')->name('inactive_category');
	Route::get('/active_category/{id}', 'CategoryController@activeCategory')->name('active_category');



});





/*
Route::get('/', function () {
    return view('frontend.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

*/

