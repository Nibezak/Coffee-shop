    <?php
    use App\Models\Post;
    use App\Models\User;
    use App\Models\Tag;
    use  Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\PostsController;
    use App\Http\Controllers\SessionsController;
    use App\Http\Controllers\RegisterController;
    use App\Http\Controllers\PostTagsController;
    use App\Http\Controllers\AuthorsController;
    use App\Http\Controllers\PostCommentsController;
    use App\Http\Controllers\NewsletterController;
    use App\Http\Controllers\UsersController;





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

    Route::get('/', function(){
        return view('welcome');
    });
    // everything assoicated with finding a post and any other attachment to the post
    Route::get('posts', [PostsController::class, 'index'])->name('all-posts');
    Route::get('posts/{post:slug}', [PostsController::class, 'show'])->name('show-post');
    Route::get('tags/{tag:slug}', [PostTagsController::class, 'show'])->name('show-tagPosts');
    Route::get('authors/{author:username}',[AuthorsController::class , 'show'])->name('show-authorPosts');


    //Posting a comment
    Route::post('post/{post:slug}/comments', [PostCommentsController::class, 'store']);

    // Subscribe for NewsLetters

    Route::post("newsletter/subscribe", NewsletterController::class);


    // RegisterController
    Route::get('register',[RegisterController::class, 'create'])->middleware('guest')->name('register');
    Route::post('register',[RegisterController::class, 'store'])->middleware('guest');
    // sessionscontroller has the login and logout functinality and other sessions
    Route::get('login', [ SessionsController::class, 'create'])->middleware('guest')->name('login');  //login
    Route::post('login', [SessionsController::class, 'store']);
    Route::post('logout', [ SessionsController::class, 'destroy'])->middleware('auth'); // logout

    Route::get("account/profile", [UsersController::class, 'profile'])->middleware('auth');
