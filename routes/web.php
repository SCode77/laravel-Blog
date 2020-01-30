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


use Illuminate\Support\Facades\Route;

Route::get('/','PageController@index');
Route::get('welcome','PageController@welcome');
Route::get('about','PageController@about');
Route::get('user/{id}','UserController@showUser');
Route::post('newsletter',['as' => 'newsLetter.store'],'NewsletterController@store');

Route::get('musers/{mId}',function ($id){
    return "WElcom3 to new Test ^__^ $id";
})->where(['mId' => '[a-d]']);

/*Route::group(['prefix' => 'article'],function(){
    Route::get('','ArticleController@index');
    Route::get('create','ArticleController@create');
    Route::get('{id}','ArticleController@show');
    Route::post('/','ArticleController@store');
    Route::get('{id}/edit','ArticleController@edit');
    Route::put('{id}','ArticleController@update');
    Route::delete('{id}','ArticleController@destroy');
});*/
Route::resource('article','ArticleController');
Route::post('article/{id}/comment', 'ArticleController@storeComment')->name('article.comment');

Route::resource('category','CategoryController',[
    'except' =>
        [
            'show'
        ]]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('article/user/{id}',function ($id){
    return $id;
})->where(['id' => '[2-5]']);

Route::get('article/name/{name}',function ($name){
    return $name;
})->where(['name' => '[c-e]']);

Route::middleware('age')->post('sendAge', function(){
    return 'invalid age';
});

Route::get('session1', 'PageController@session1');
Route::get('session2', 'PageController@session2');
Route::get('session3', 'PageController@session3');
Route::get('session4', 'PageController@session4');
Route::get('session5', 'PageController@session5');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
