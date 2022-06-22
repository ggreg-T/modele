<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function(){
    return view('accueil');
});

################## ver Akili ##########

Route::get("message", "MessageController@formMessageGoogle");
Route::post("message", "MessageController@sendMessageGoogle")->name('send.message.google');

################# ver nordcoder #############

Route::get('/bar', '\App\Http\Controllers\TestController@bar');


################# ver Surfside ###############

Route::get('/send-mail', function(){
    $details = [
        'title'=>'Mail from surfside',
        'body'=>'donc, alors!!'
    ];
    \Mail::to('kenduradd@gmail.com')->send(new \App\Mail\TestMail2($details));
    echo "Mail send!!!";
});

