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
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('hello','IndexController@index');
Route::get('create','StudentController@add');
//Route::get('admin/register','AdminController@register');
Route::post('student','StudentController@store');

Route::get('form','CompaniesController@form');
Route::get('show','CompaniesController@show');
Route::post('submit','CompaniesController@save');
Route::get('delete/{id}','CompaniesController@delete');

Route::get('edit/{id}','CompaniesController@edit');
Route::post('update/{id}','CompaniesController@update');

//adminlogin
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::match(['get','post'], 'admin','AdminController@index');

Route::group(['middleware'=>['auth']],function(){
Route::get('admin/dashboard','AdminController@dashboard');
Route::get('admin/logout','AdminController@logout');
Route::get('admin/contact','AdminContact@show');
Route::get('delete/{id}','AdminContact@delete');
Route::get('event','EventController@create');
Route::post('submit','EventController@save');

//category

Route::get('admin/category-index','Admin\CategoryController@index');
Route::get('admin/addcategory','CategoryController@create');
Route::post('datasubmit','CategoryController@save');

});












//user

Route::get('index','IndexController@index');
Route::get('aboutus','IndexController@about_us');
Route::get('userlogin','UserController@login');
Route::get('userregister','UserController@register');
Route::get('contact','ContactController@send');
Route::post('submit','ContactController@save');