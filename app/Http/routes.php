<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('contact', function() {

    $fromEmail = Input::get('email');
    $fromName = Input::get('name');
    $data = array( 'message' => Input::get('message') );
    $toEmail = 'cocobunnie1234@gmail.com';
    $toName = 'Emmie';

    Mail::send('welcome', $data, function($message) use ($toEmail, $toName, $fromEmail, $fromName)
    {
        $message->to($toEmail, $toName);

        $message->from($fromEmail, $fromName);

        $message->subject($fromName);
    });
    return Redirect::to('/');

});
