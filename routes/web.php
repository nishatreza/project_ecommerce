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
//home content
// Route::get('/login','LoginController@index');
Route::get('/','FrontendController@index');

//category wise product show
Route::get('/category/{id}','FrontendController@category');




// Route::get('/', function () {
//     // return view('welcome');
//     return view('login');

// });
//auth
Auth::routes();

//admin home
Route::get('/home', 'HomeController@index')->name('home');


//category info

Route::get('/add-category', 'CategoryController@createCategory');
Route::post('/new-category', 'CategoryController@storeCategory');
Route::get('/manage-category', 'CategoryController@manageCategory');
Route::get('/edit-category/{id}', 'CategoryController@editCategory');
Route::post('/update-category', 'CategoryController@updateCategory');
Route::get('/delete-category/{id}', 'CategoryController@deleteCategory');

//Manufacturer Info

Route::get('/add-manufacturer', 'ManufacturerController@createManufacturer');
Route::post('/new-manufacturer', 'ManufacturerController@storeManufacturer');
Route::get('/manage-manufacturer', 'ManufacturerController@manageManufacturer');
Route::get('/edit-manufacturer/{id}', 'ManufacturerController@editManufacturer');
Route::post('/update-manufacturer', 'ManufacturerController@updateManufacturer');
Route::get('/delete-manufacturer/{id}', 'ManufacturerController@deleteManufacturer');

//Product Info

Route::get('/add-product', 'ProductController@createProduct');
Route::post('/new-product', 'ProductController@storeProduct');
Route::get('/manage-product', 'ProductController@manageProduct');
Route::get('/view-product/{id}', 'ProductController@viewProduct');
Route::get('/edit-product/{id}', 'ProductController@editProduct');
Route::post('/update-product', 'ProductController@updateProduct');
Route::get('/delete-product/{id}', 'ProductController@deleteProduct');


//slider Info
Route::get('/add-slider','SliderController@addSlider');
Route::post('/new-slider','SliderController@storeSlider');
