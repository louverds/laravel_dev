<?php
/** declare types */
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/members', 'PagesController@members');
/** Declare Auth above */ 
Auth::routes();
Route::get('/home', 'PagesController@index');

/** Not use default in Auth routes
 *  Route::get('/home', 'HomeController@index')->name('home');
 * 
 */

Route::resource('posts', 'PostsController');
//
//Route::get('posts', 'PostsController@index');
//Delete Post
Route::post('posts/delete/{id}', 'PostsController@destroy');

Route::get('/members', 'MembersController@list');
Route::post('/members', 'MembersController@store');
Route::get('/items', 'ItemsController@itemlist');
Route::get('/itemsentry', 'ItemsController@create');
Route::post('/items', 'ItemsController@store');