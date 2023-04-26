<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Models\Comment;
use App\Models\Tag;
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

    // $comment = Comment::first();
    // dd($comment->subject);


    $post = Post::find(1);
    // ---- One to one PolymorPhic
    //return($post->comments);

    // ---- One to Many PolymorPhic
    return($post->comments);


    return view('welcome');
});


Route::get('/tags', function(){
    $post = Post::first();
    $video = Video::first();
    $tag = Tag::find(1);

    // ----- create data in Tag Table and Polymorphic Pivot Table
    // $post->tags()->create([
    //     'name'=>'ReactJs',
    // ]);

     // ----- create data in Polymorphic Pivot Table with Post Model
     //$post->tags()->attach([2]);
    //  return($video->tags);

      // ----- create data in Polymorphic Pivot Table with Video Model
    //  $video->tags()->attach([1]);
    //  return($video->tags);

    //return($tag->videos);
    return($tag->posts);


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
