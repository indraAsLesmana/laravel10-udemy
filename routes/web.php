<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index', [
        'name' => 'Laravel',
    ]);
});

// tagging/naming route
Route::get('/xxx', function () {
    return 'Hello';
})->name('hello');

// how to route with name
// Route::get('/', function () {
//     return redirect()->route('hello');
// });

Route::get('/greet{name}', function ($name) {
    return 'Hello' . $name . '!';
});

// handling unhandle route
Route::fallback(function () {
    return 'Not Found';
});




