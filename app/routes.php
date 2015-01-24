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

Route::get('/', 'HomeController@showIndex');
Route::get('/overview', 'HomeController@showOverview');

Route::get('/about', 'HomeController@showAbout');

Route::get('/messagesent', 'HomeController@getSuccesMessage');


Route::get('login/fb', 'FacebookController@login');
Route::get('login/fb/callback', 'FacebookController@callback');
Route::get('logout', 'FacebookController@logout');
Route::post('arrived', 'HomeController@postArrived');
Route::post('/liftoff/{type}', 'HomeController@postMessages');
Route::get('/card/{id}', 'HomeController@getSpecificMessage');

Route::get('/code/{code}', 'HomeController@getSpecificMessageCode');


App::missing(function($exception)
{
    return Response::view('pages.missing', array(), 404);
});


Route::get('login/tw', function(){
    // Reqest tokens
    $tokens = Twitter::oAuthRequestToken();

    // Redirect to twitter
    Twitter::oAuthAuthenticate(array_get($tokens, 'oauth_token'));
    exit;
});

Route::get('/login/tw/callback', function(){
    // Oauth token
    $token = Input::get('oauth_token');

    // Verifier token
    $verifier = Input::get('oauth_verifier');

    // Request access token
    $accessToken = Twitter::oAuthAccessToken($token, $verifier);

    var_dump($accessToken);
});




// Event::listen('illuminate.query', function($query)
// {
// 	echo '<br /><br />';
//     var_dump($query);
// });




Form::macro('age', function()
{
    return '<input type="number" name="age" min="1" max="100">';
});