<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Models\Comment;
use App\Models\Video;

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


    // ---- Create Comment morphTable with Post  Record
    //$post = Post::find(1);
    // $post->comments()->create([
    //     'user_id' => 1,
    //     'body' => '1nd comment for post'
    // ]);
    // $post->comments()->create([
    //     'user_id' => 1,
    //     'body' => '2nd comment for post',
    // ]);

    // ---- Create Comment morphTable with Video  Record
    //$video = Video::find(1);
    // $video->comments()->create([
    //         'user_id' => 1,
    //         'body' => 'comment for Video',
    //     ]);

    $comment = Comment::first();
    dd($comment->subject);



    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
