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

Route::get('/','PageController@index');
Route::get('welcome','PageController@welcome');
Route::get('about','PageController@about');
Route::get('user/{id}','UserController@showUser');
Route::post('newsletter',['as' => 'newsLetter.store'],'NewsletterController@store');

Route::get('musers/{mId}',function ($id){
    return "WElcome to new Test^__^ $id";
})->where(['mId' => '[a-d]']);

Route::group(['prefix' => 'article'],function(){
    Route::get('','ArticleController@index');
    Route::get('create','ArticleController@create');
    Route::get('{id}','ArticleController@show');
    Route::post('/','ArticleController@store');
    Route::get('{id}/edit','ArticleController@edit');
    Route::put('{id}','ArticleController@update');
    Route::delete('{id}','ArticleController@destroy');
    Route::post('{id}/comment','ArticleController@storeComment');
});

Route::resource('category','CategoryController',[
    'except' =>
        [
            'show'
        ]]);
