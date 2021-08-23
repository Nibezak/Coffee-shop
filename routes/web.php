    <?php
    use App\Models\Post;
    use App\Models\User;
    use App\Models\Tag;
    use  Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\PostsController;
    use App\Http\Controllers\SessionsController;
    use App\Http\Controllers\RegisterController;


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
    Route::get('posts', [PostsController::class, 'index'])->name('all-posts');
    Route::get('posts/{post:slug}', [PostsController::class, 'show'])->name('show-post');
    Route::get('tags/{tag:slug}', [PostsController::class, 'showPostTags'])->name('show-tagPosts');
    Route::get('authors/{author:username}',[PostsController::class , 'showAuthorPosts'])->name('show-authorPosts');

    // RegisterController
    Route::get('register',[RegisterController::class, 'create'])->middleware('guest')->name('register');
    Route::post('register',[RegisterController::class, 'store'])->middleware('guest');
    // sessionscontroller has the login and logout functinality and other sessions
    Route::get('login', [ SessionsController::class, 'create'])->middleware('guest')->name('login');  //login
    Route::post('login', [SessionsController::class, 'store']);
    Route::post('logout', [ SessionsController::class, 'destroy'])->middleware('auth'); // logout


