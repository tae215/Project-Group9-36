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
//welcome
Route::get('/layouts/welcome','welcomeController@index')->name('welcome');
//admin
Route::get('/admin/index','Admin\AdminController@index')->name('index');
//category
Route::get('/admin/category/index','Admin\CategoryController@index')->name('category');
//product
Route::get('/admin/product/index','Admin\ProductController@index')->name('product');
//menu
Route::get('/admin/menu/addindex','addmenuController@index')->name('addmenu');
Route::get('/admin/menu/index','Admin\MenuController@index')->name('menu');
Route::post('/admin/menu/create','Admin\MenuController@create')->name('create');
Route::get('/admin/menu/edit/{id}','Admin\MenuController@edit');
Route::post('/admin/menu/update/{id}','Admin\MenuController@update');
Route::get('/admin/menu/delete/{id}','Admin\MenuController@delete');


//Fontend
Route::get('/','FontendController@index')->name('home');


//user
Route::get('/admin/user/index','adduserController@index')->name('user');
Route::get('/admin/user/edituser/{id}','adduserController@edituser');
Route::post('/admin/user/updateuser/{id}','adduserController@updateuser');
Route::get('/admin/user/deleteuser/{id}','adduserController@deleteuser');
//body
Route::get('/admin/body/index','Body@index')->name('body');
//source
Route::get('/admin/source/index','Source@index')->name('source');
//header
Route::get('/admin/header/index','Header@index')->name('header');
//type
Route::get('/admin/type/addindex','addtypeController@index')->name('addtype');
Route::get('/admin/type/index','typeController@index')->name('type');
Route::post('/admin/type/createtype','typeController@createtype')->name('createtype');
Route::get('/admin/type/edittype/{id}','typeController@edittype');
Route::post('/admin/type/updatetype/{id}','typeController@updatetype');
Route::get('/admin/type/deletetype/{id}','typeController@deletetype');



Auth::routes();
Route::get ('/about','HomeController@about');
Route::get('/home', 'HomeController@index')->name('home');

