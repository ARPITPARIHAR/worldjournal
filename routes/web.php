<?php

use App\Models\AddJournal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\CfpDataController;
use App\Http\Controllers\PostCfpController;
use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchcfpController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\AddJournalController;
use App\Http\Controllers\Auth\AuthController; 
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RestrictedController;
use App\Http\Controllers\JournalDataController;
use App\Http\Controllers\CallForPaperController;
use App\Http\Controllers\BusinessSettingController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\BookMarkController;
use Illuminate\Http\Request;

Route::get('/', [UserController::class, 'index']);
Route::get('user/login', [UserController::class, 'login'])->name('user.login');
Route::get('/promote', [UserController::class, 'promote'])->name('user.promote');
Route::get('user/add', [UserController::class, 'add'])->name('user.add'); 
Route::get('user/search', [UserController::class, 'search'])->name('user.search'); 
Route::get('/contact', [UserController::class, 'contact'])->name('user.contact'); 
Route::get('/about', [UserController::class, 'about'])->name('user.about');
Route::get('/dash', [UserController::class, 'dash'])->name('user.journaldashboard');
Route::get('/contactus', [UserController::class, 'contactus'])->name('user.contactus');
// Route::post('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
// Route::get('admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');
// Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
//     Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

// Route::get('login', [LoginController::class, 'login'])->name('user.login');

Route::get('dashboard/addjournal/index', [AddJournalController::class, 'index'])->name('dashboard.addjournal.index');
Route::get('admin/edit', [BusinessSettingController::class, 'edit'])->name('admin.edit');
Route::post('admin/edit', [BusinessSettingController::class, 'update'])->name('admin.update');

//  Route::middleware(['login'])->group(function () {
Route::get('/addjournal', [AddJournalController::class, 'create'])->name('user.add.create');
Route::post('user/add/store', [AddJournalController::class, 'store'])->name('user.add.store');
//  });

Route::get('/search', [SearchController::class, 'search'])->name('user.search');


Route::get('/country-list', [AddJournalController::class, 'countryList'])->name('countryList');

// Route::get('user/create', [SignupController::class, 'create'])->name('user.create');
// Route::post('user/register', [SignupController::class, 'register'])->name('user.register');
// Route::get('verify-email/{token}', [SignupController::class, 'verifyEmail'])->name('verify.email');

// Route::get('/reset', [ForgotPasswordController::class, 'showLinkRequestForm']);

// Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');








// Route::middleware(['login'])->group(function () {
    Route::get('/postcfp', [PostCfpController::class, 'create'])->name('user.postcfp');
    Route::post('/indexpostcfp', [PostCfpController::class, 'index'])->name('user.index');
// });
// Route::get('/mycfp', [PostCfpController::class, 'mycfp'])->name('user.mycfp');

//  Route::middleware(['login'])->group(function () {
Route::get('/data', [JournalDataController::class, 'create'])->name('user.create');
Route::post('user/data/store', [JournalDataController::class, 'store'])->name('user.data.store');
// });
//  Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::get('registration', [AuthController::class, 'registration'])->name('register');





Route::middleware('auth')->group(function () {
    Route::get('/restricted-page', [RestrictedController::class, 'index'])->name('restricted.page');
});

Route::get('logins', [UserLoginController::class, 'LoginForm'])->name('logins');
Route::post('log-post', [UserLoginController::class, 'login'])->name('log.post');
Route::get('logout', [UserLoginController::class, 'logout'])->name('logout');

Route::get('/re', [ResetPasswordController::class, 'showResetForm'])->name('password.re');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');



Route::get('registration', [RegisterController::class, 'registration'])->name('register');
Route::post('registration/store', [RegisterController::class, 'store'])->name('register.store');






Route::get('login/{provider}', [UserLoginController::class, 'redirectToProvider'])->name('login.provider');
 Route::get('login/{provider}/callback', [UserLoginController::class, 'handleProviderCallback'])->name('login.provider.callback');
       
    
 Route::any('whatsapp/call-back-url',function(Request $request){
    // dd($request->all());
    \Log::alert($request->all());
    $my_token = env('META_VERIFY_TOKEN');
    $query = $request->all();
    $mode = $query['hub_mode'];
    $token = $query['hub_verify_token'];
    $challenge = $query['hub_challenge'];

    if ($my_token===$token) {
        \Log::alert($challenge);
       return $challenge;
    } else {
        return response(500);
    }
    
});


 Route::get('/webhooks', [UserLoginController::class, 'handleWebhook']);

 Route::post('login/whatsapp/callback', [UserLoginController::class, 'loginWithWhatsAppCallback'])->name('login.whatsapp.callback');
 Route::get('/send-otp', [UserLoginController::class, 'showLoginForm'])->name('send.otp');
 Route::get('/enter-otp', [UserLoginController::class, 'showOtpForm'])->name('enter-otp');
 Route::get('webhook/verify', [UserLoginController::class, 'webhookget']);
   Route::get('/webhook', [UserLoginControllerName::class, 'webhookpost']);
   Route::post('webhook/subscribe', [UserLoginController::class, 'webhooksubscribe']);


// Route for initiating the social login process
// // Email verification routes
// Route::get('/email/verify/{id}/{hash}', [RegisterController::class, 'verifyEmail'])->name('verification.verify');
// Route::get('/email/verify', [RegisterController::class, 'showVerificationNotice'])->name('verification.notice');
// Route::get('/email/resend', [RegisterController::class, 'resendVerificationEmail'])->name('verification.resend');

Route::post('feedback.store', [FeedBackController::class, 'store'])->name('feedback.store');

Route::post('/searchcfp', [SearchCfpController::class, 'index'])->name('user.searchcfp');


Route::get('/callforpaper', [CallForPaperController::class, 'create']);
Route::post('/call-for-paper/submit',[CallForPaperController::class, 'store'] )->name('call-for-paper.submit');
// Route::post('user/add/store', [CallForPaperController::class, 'store'])->name('user.add.store');

Route::get('logins', [UserLoginController::class, 'LoginForm'])->name('logins');
Route::post('log-post', [UserLoginController::class, 'login'])->name('log.post');

Route::post('bookmark/add', [BookMarkController::class, 'store'])->name('bookmark.add');
Route::get('bookmarkjournal', [BookMarkController::class, 'show']);
