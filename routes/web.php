<?php
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use  Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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


Route::get('/', [PostsController::class, 'index']);


Route::get('/posts/{post:slug}', function (Post $post){

    $authors = User::all();
    return view('post', [
         'post' => $post,

    ]);
});
Route::get('authors/{author:username}', function(User $author)
{
    $author = $author->posts;
    return view('authors',[
        'posts' => $author,
        'tags' => Tag::all(),

    ]);
});


Route::get('tags/{tag:slug}', function(Tag $tag)
{
    return view('post-tags', [
        'posts' => $tag->posts
    ]);
});
