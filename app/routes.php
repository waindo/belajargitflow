<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('newbook', function()
{
 return View::make('newbook');
});

//route input database
Route::post('book/insert', 'BookController@store');

//route function login
Route::get('login', function ()
{
 return View::make('login');
});

Route::post('login', 'LoginController@store'); 
 
 //menampilkan database "buktam"
Route::get('listbook', function(){

   $books = Book::all();
   return View::make('listbook')->with('booksdata', $books);

});