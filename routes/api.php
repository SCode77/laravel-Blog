<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('article', 'api\ArticleController',
    ['except' => [
        'create',
        'edit'
    ]]);
Route::post('article/{id}/comment',
    [
        'as' => 'article.comment',
        'uses' => 'api\ArticleController@storeComment'
    ]);
Route::get('test', ['middleware' => 'auth.basic',
    'uses' => function () {
        return ' <body style="background-color:black" ><p style="color: white" >welcome to my restfull API <br> you logged in successfully</p></body> ';
    }]);
