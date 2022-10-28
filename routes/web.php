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
    return view('layout/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getImage/{cover_img}',['uses'=>'BookController@getImage','as'=>'img']);
Route::get('/getBook/{book_file}',['uses'=>'BookController@getBook','as'=>'books']);


Route::get('/getImage/users/{pic}',['uses'=>'UserController@getImage','as'=>'pic']);
Route::get('/getImage/categories/{cat_img}',['uses'=>'AdminCategoriesController@getImage','as'=>'cat']);

Route::prefix('admin')->group(function () {
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
	Route::get('register', 'AdminController@create')->name('admin.register');
	Route::post('register', 'AdminController@store')->name('admin.register.store');
	Route::get('login', 'Auth\Admin\LoginController@login')->name('admin.auth.login');
	Route::post('login', 'Auth\Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');
	Route::post('logout', 'Auth\Admin\LoginController@logout')->name('admin.auth.logout');
});
  
Route::group(['middleware' => 'auth'], function(){
	Route::get('/index', 'BookController@getShowBook');
    Route::get('/upload_book',['uses'=>'BookController@getNewBook','as'=>'upload_book']);
    Route::post('/upload_book',['uses'=>'BookController@postNewBook','as'=>'upload_book']);
    Route::get('/book/{id}/detail', 'BookController@getDetailBook');    
    Route::get('/user/profile', 'UserController@getShowBook');
	Route::get('/book/{id}/delete', 'BookController@DeleteBook');
	Route::get('user/edit', 'UserController@edit');
	Route::resource('user', 'UserController');
    Route::get('/book/categories', 'BookController@getShowCategories');
    Route::get('/book/categories/{id}/show', 'BookController@getShowBooks');  

});


Route::group(['middleware' => 'auth:admin'], function(){

Route::get('admin/users', 'AdminUsersController@index');
Route::get('admin/users/create', 'AdminUsersController@create');
Route::get('admin/users/{id}/edit', 'AdminUsersController@edit');
Route::get('admin/books', 'AdminBooksController@index');
Route::get('admin/books/{id}/edit', 'AdminBooksController@edit');
Route::resource('book', 'AdminBooksController');
Route::get('admin/books/create',['uses'=>'AdminBooksController@getNewBook','as'=>'upload_books']);
Route::post('admin/books/create',['uses'=>'AdminBooksController@postNewBook','as'=>'upload_books']);
Route::resource('users', 'AdminUsersController');
Route::get('admin/categories', 'AdminCategoriesController@index');
Route::get('admin/categories/create', 'AdminCategoriesController@create');
Route::resource('categories', 'AdminCategoriesController');
});

