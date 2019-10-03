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

Route::group(['prefix' => '/auth', ['middleware' => 'throttle:20,5']], function () {
    Route::post('/register', 'Auth\RegisterController@register');
    Route::post('/login', 'Auth\LoginController@login');

    Route::get('/login/{service}', 'Auth\SocialLoginController@redirect');
    Route::get('/login/{service}/callback', 'Auth\SocialLoginController@callback');
});


Route::group(['prefix' => '/candauth', ['middleware' => 'throttle:20,5']], function () {
    Route::post('/register', 'CandAuth\PlusController@register');
    Route::post('/login', 'CandAuth\PlusController@login');
});



Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('/me', 'MeController@index');

    Route::get('/auth/logout', 'MeController@logout');
});



Route::get('offres', 'OffreController@index');
Route::get('offres/{projet}', 'OffreController@show');
Route::post('offres', 'OffreController@store');
Route::put('offres/{projet}', 'OffreController@update');
Route::delete('offres/{projet}', 'OffreController@destroy');


// Route::get('cands', 'CandidatController@index');
// Route::get('cands/{candidat}', 'CandidatController@show');
// Route::post('cands', 'CandidatController@store');
// Route::put('cands/{candidat}', 'CandidatController@update');
// Route::delete('cands/{candidat}', 'CandidatController@destroy');

Route::get('cands', 'CandidatureController@index');
Route::get('cands/{candidature}', 'CandidatureController@show');
Route::post('cands', 'CandidatureController@store');
Route::put('cands/{candidature}', 'CandidatureController@update');
Route::delete('cands/{candidature}', 'CandidatureController@destroy');

// comments
Route::post('/comments','CommentsController@store');
Route::get('/comments','CommentsController@index');