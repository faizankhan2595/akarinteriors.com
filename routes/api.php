<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'message' => 'required',
    ]);

    Mail::send('emails.enquiry', ['request' => $request], function ($message) use ($request) {
        $message->subject('New Enquiry Received'); 
        $message->to('faizankhan2595@gmail.com');
        $message->from("testingdummy124@gmail.com", "Akarinteriors");
    }); 

    return response()->json(['message' => 'Your message has been sent!']);
});
