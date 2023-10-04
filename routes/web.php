<?php

use Illuminate\Support\Facades\Route;
use App\Mail\RegistrationSuccess;
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

Auth::routes(['verify' => true]);

Route::get('register', function () {
    abort(404);
});
Route::get('password/reset', function () {
    abort(404);
});
Route::get('stlink', function () {
    $exitCode = \Artisan::call('storage:link');
    // symlink('/home/challen1/demo.cse-alumni-mbstu.org/storage/app/public', '/home/challen1/public_html');
    return "created";
});


Route::get('qr-code-test', function () {

    $data = array('name'=>"Ariful islam");
     Mail::send(['text'=>'mail.regiatration_success'], $data, function($message) {
         $message->to('ariful3010@gmail.com', 'Ahcab Expo')->subject
            ('Ahcab Expo');
         $message->from('info@ahcab.net','Ariful Islam');
      });

    $text = 'Hello';
    $email = 'ariful3010cse@gmail.com';
    Mail::to($email)->send(new RegistrationSuccess($text,$email));

    return 1;
});
