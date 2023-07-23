<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
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

// Route::get('/', function () {
//     return view('posts', [
//         'posts' => Post::all()
//     ]);
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts/{post}', function($id){
    return view('post', [
        'post' => Post::findOrFail($id)
    ]);

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isadmin'])->group(function(){
    Route::get('/welcome', function () {
        return view('welcome');
    });
});
