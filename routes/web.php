<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
/*

Route::get('/', function () {
    return view('admin.login');
});

Route::get('/', function () {
    return view('admin.login');
});

*/

Auth::routes();



Route::get('createproduct', 'ProductsController@create')->name('createProduct');
Route::get('subcategory', 'SubCategory@subCategory')->name('subcategory');
Route::resource('adminproduct', 'ProductsController');

Route::resource('/role', 'RolesController');




Route::get('/login1', 'PagesController@ulogin')->name('ulogin');
Route::any('/checkout', 'PagesController@pCheckOut')->name('checkout');
Route::any('/precheckout', 'PagesController@preCheckOut')->name('precheckout');
Route::get('/cart', 'PagesController@pCart')->name('cart');
Route::get('/category/{cat}', 'PagesController@pCategory')->name('category');
Route::get('/sort', 'PagesController@sort')->name('sort');
Route::get('/details/{id}', 'PagesController@pDetails')->name('details');
Route::get('/', 'PagesController@tito')->name('home');
Route::post('subscribe', 'SubscriptionController@store')->name('subscribe');


Route::post('/comment/{id}', 'CommentsController@store')->name('storecomment');
Route::post('/review/{id}', 'ReviewsController@store')->name('storereview');



Route::get('/titoadmin2019', 'AdminPagesController@tito')->name('dash');
Route::get('/notificationso', 'AdminPagesController@tNotificationO')->name('notificationO');
Route::get('/notificationsr', 'AdminPagesController@tNotificationR')->name('notificationR');
Route::get('/notificationss', 'AdminPagesController@tNotificationS')->name('notificationS');
Route::get('/notificationsc', 'AdminPagesController@tNotificationC')->name('notificationC');
Route::get('/profile', 'AdminPagesController@profile')->name('profile');
Route::get('/roles', 'AdminPagesController@roles')->name('roles');







Route::get('/webhome', 'UserPagesController@tHome')->name('webhome');
Route::get('/webcategory', 'UserPagesController@tCategory')->name('webcategory');
Route::get('/webdetails', 'UserPagesController@tDetails')->name('webdetails');
Route::get('/webcart', 'UserPagesController@tCart')->name('webcart');
Route::get('/webcheckout', 'UserPagesController@tCheckout')->name('webcheckout');



Route::post('userhome', 'UserPagesUpdateController@update')->name('userhome');
Route::post('usercat', 'UserPagesUpdateController@updateCategory')->name('usercat');


Route::post('/titoadmin', 'AdminLoginController@login')->name('adminlogin');
Route::get('/titoadmin', 'AdminLoginController@show')->name('showadminlogin');
Route::post('/titoadminlog', 'AdminLoginController@logout')->name('adminlogout');



Route::get('search', 'PagesController@search')->name('search');
Route::get('sidebar/{item}', 'PagesController@sidebar')->name('sidebar');
Route::post('cartitems', 'SubCategory@cartitems')->name('cartitems');
Route::delete('removeitem', 'SubCategory@removeItem')->name('removeitem');
Route::get('clearCart', 'SubCategory@clearCart')->name('clearCart');