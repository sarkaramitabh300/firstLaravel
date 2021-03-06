<?php
use App\Models\Post;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){
    return view('posts',[
        'posts' => Post::all()
    ]);
});
Route::get('post/{post}',function($id){
    return view('post',[
        'post' => Post::findorFail($id)
    ]);
});
Route::get('/me',function(){
    return"<h1>Hello Amitabh</h1>";
});