<?php

use App\Models\admin;
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
//fontend
Route::get('/', 'HomeController@index');

Route::get('/trang-chu', 'HomeController@index');

Route::get('/danh-muc-san-pham/{id}', 'HomeController@show_category_home');

Route::get('/thuong-hieu-san-pham/{id}', 'HomeController@show_brand_home');

Route::get('/chi-tiet-san-pham/{id}','HomeController@details_product');

//backend
Route::get('/admin', 'AdminController@index') ->name('admin');

Route::get('/dashboard', 'AdminController@show_dashboard')->name('dashboard');

Route::get('/logout', 'AdminController@logout') -> name('logout');

Route::post('/admin-dashboard', 'AdminController@dashboard');

//category-product
Route::get('/add-category-product', 'CategoryProduct@add_category_product')->name('add-category-product');

Route::get('/edit-category-product/{id}', 'CategoryProduct@edit_category_product');

Route::get('/delete-category-product/{id}', 'CategoryProduct@delete_category_product');

Route::post('/update-category-product/{id}', 'CategoryProduct@update_category_product');

Route::get('/all-category-product', 'CategoryProduct@all_category_product')->name('all-category-product');

Route::post('/save-category-product', 'CategoryProduct@save_category_product');

Route::get('/unactive-category-product/{id}', 'CategoryProduct@unactive_category_product');

Route::get('/active-category-product/{id}', 'CategoryProduct@active_category_product');

//brand-product
Route::get('/add-brand-product', 'BrandProduct@add_brand_product')->name('add-brand-product');

Route::get('/edit-brand-product/{id}', 'BrandProduct@edit_brand_product');

Route::get('/delete-brand-product/{id}', 'BrandProduct@delete_brand_product');

Route::post('/update-brand-product/{id}', 'BrandProduct@update_brand_product');

Route::get('/all-brand-product', 'BrandProduct@all_brand_product')->name('all-brand-product');

Route::post('/save-brand-product', 'BrandProduct@save_brand_product');

Route::get('/unactive-brand-product/{id}', 'BrandProduct@unactive_brand_product');

Route::get('/active-brand-product/{id}', 'BrandProduct@active_brand_product');

//product
Route::get('/add-product', 'ProductController@add_product')->name('add-product');

Route::get('/edit-product/{id}', 'ProductController@edit_product');

Route::get('/delete-product/{id}', 'ProductController@delete_product');

Route::post('/update-product/{id}', 'ProductController@update_product');

Route::get('/all-product', 'ProductController@all_product')->name('all-product');

Route::post('/save-product', 'ProductController@save_product');

Route::get('/unactive-product/{id}', 'ProductController@unactive_product');

Route::get('/active-product/{id}', 'ProductController@active_product');

//cart
 Route::post('/cart','CartController@save_cart');


