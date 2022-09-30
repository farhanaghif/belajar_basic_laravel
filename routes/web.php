<?php

use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::middleware('role:superadmin')->get('/admin', [HomeController::class, 'admin'])->name('admin');

Route::middleware(['auth'])->group(function(){
    //activity log
    Route::get('activity', [ActivityLogController::class,'index'])->name('activity');

    //project
    Route::resource('project', ProjectController::class);
    
    Route::get('dashboard',[HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('task', [TaskController::class,'index'])->name('task');

    //video
    Route::get('video', [VideoController::class,'index'])->name('video');
    Route::get('video/{code}', [VideoController::class,'show'])->name('video.show');

    //article
    Route::get('article', [ArticleController::class,'index'])->name('article');

    //comment
    Route::post('video/comment/store', [CommentController::class, 'commentvideostore'])->name('video.comment.store');

    //posts
    Route::resource('post', PostController::class);
});
