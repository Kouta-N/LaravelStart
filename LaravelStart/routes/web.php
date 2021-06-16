<?php

use App\Http\Middleware\HelloMiddleware;
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

Route::get('/', function () {
    return view('welcome');
});


$html = <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body {font-size:16pt; color:#999;}
</style>
</head>
<body>
<h1>Hello</h1>
<p>これはサンプルです</p>
</body>
</head>
</html>
EOF;

// Route::get('hello', function () use ($html) {
//     return $html;
// });

// Route::get('hello/{msg}', function ($msg) {
//     $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body {font-size:16pt; color:#999;}
// </style>
// </head>
// <body>
// <h1>Hello</h1>
// <p>{$msg}</p>
// <p>これはサンプルです</p>
// </body>
// </head>
// </html>
// EOF;

// return $html;

// });

// Route::get('hello/{msg?}', function ($msg = 'no message') {

//     $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body {font-size:16pt; color:#999;}
// </style>
// </head>
// <body>
// <h1>Hello</h1>
// <p>{$msg}</p>
// <p>これはサンプルです</p>
// </body>
// </head>
// </html>
// EOF;

// return $html;

// });

// Route::get('hello/{id?}/{pass?}', 'App\Http\Controllers\HelloController@index') ;
// Route::get('hello/other', 'App\Http\Controllers\HelloController@other') ;
Route::get('hello', 'App\Http\Controllers\HelloController@index')->middleware('hello');
Route::post('hello', 'App\Http\Controllers\HelloController@post') ;
// Route::get('hello/', function(){
//     return view('hello.index');
// }) ;