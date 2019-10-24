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
Route::get('/product','ProductController@index');

// Route::get('/calculate', function(){
//     return view('calculator');
// });

// Route::post('/calculate','CalculateController@calculate');

Route::get('/home', function() {
    return view('home');
});
Route::get('/home','HomeController@home');

Route::get('/contact', function() {
    return view('contact');
});
Route::get('/contact','ContactController@contact');

Route::get('/about', function() {
   return view('about'); 
});
Route::get('/about','AboutController@about');

//Test
Route::get('/test', function(){
    return view('test',['name'=>'Hoang Quy']);
});

Route::get('/sayhello', function (){
    return view('sayhello');
});
Route::get('/sayhello','SayhelloController@sayhello');

// Calculate
Route::get('/calculate','CalculatorController@index');
Route::post('/calculate','CalculatorController@calculate');

// Application Form
Route::get('/applicationform/create','ApplicationformController@create');
Route::post('/applicationform','ApplicationformController@store');

// Route::get('/test', function(){
//     return view('test.test1');
// });

Route::get('/productcategory/create','ProductCategoryController@create');
Route::post('/productcategory','ProductCategoryController@store');



