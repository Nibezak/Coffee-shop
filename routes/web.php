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
    use \MailchimpMarketing\ApiClient;




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

    // RegisterController
    Route::get('register',[RegisterController::class, 'create'])->middleware('guest')->name('register');
    Route::post('register',[RegisterController::class, 'store'])->middleware('guest');
    // sessionscontroller has the login and logout functinality and other sessions
    Route::get('login', [ SessionsController::class, 'create'])->middleware('guest')->name('login');  //login
    Route::post('login', [SessionsController::class, 'store']);
    Route::post('logout', [ SessionsController::class, 'destroy'])->middleware('auth'); // logout

    //Posting a comment
    Route::post('post/{post:slug}/comments', [PostCommentsController::class, 'store']);

    // Subscribe for NewsLetters

    Route::post("newsletter/subscribe", function(){
        request()->validate(['email' => 'required|email',]);
    $mailchimp = new ApiClient();

    $mailchimp->setConfig([
    'apiKey' => config('services.mailchimp.key'),
    'server' => 'us5'
    ]);
    try{
    $response = $mailchimp->lists->addListMember("c0a16e31b5", [
    "email_address" => request('email'),
    "status" => "subscribed",
]);
 }catch (\Exception $e){
    \Illuminate\Validation\validationException::withMessages([
        'email' => 'This Email could not be added.'
    ]);
 }
    return back()->with('success','Successfully signed up');
    });
