<?php

use App\Http\Controllers\backend\auth\LoginController;
use App\Http\Controllers\backend\auth\LogoutController;
use App\Http\Controllers\backend\auth\RegisterController;
use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\MemberManageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\MemberController;
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
//     return view('welcome');
// });


Route::get('/',[HomeController::class,'frontendIndex'])->name('frontend.index');



Route::middleware('user')->group(function(){

   

});


Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');


Route::get('/blog',[BlogController::class,'index'])->name('blog');

Route::get('/contact',[ContactController::class,'frontendContact'])->name('frontend.contact');


// member part


Route::get('/member',[MemberController::class,'memberPage'])->name('frontend.member');

Route::post('/search/member',[MemberController::class,'searchMember'])->name('members.search');

Route::get('/active/member',[MemberController::class,'activeMember'])->name('active.member');
Route::get('/latest/member',[MemberController::class,'latestMember'])->name('latest.member');





Route::get('/login',[LoginController::class,'showLoginForm'])->name('show.login');
Route::post('/login',[LoginController::class,'login'])->name('login');




Route::get('/register',[RegisterController::class,'showRegister'])->name('show.register');
Route::post('/register',[RegisterController::class,'register'])->name('register');




Route::middleware('admin')->group(function(){

    Route::get('/admin/dashboard',[HomeController::class,'Admindashboard'])->name('admin.dashboard');
    Route::get('/admin/profile',[HomeController::class,'adminProfile'])->name('admin.profile');
    Route::post('/admin/profile/update',[HomeController::class,'adminProfileUpdate'])->name('admin.profile.update');




});




Route::get('/logout',[HomeController::class,'Logout'])->name('logout');






//########  Blog Part ##########...........

Route::get('/all/blog',[BlogController::class,'blogsAll'])->name('all.blog');
Route::get('/blog/create',[BlogController::class,'blogsCreate'])->name('blog.create');

Route::post('/blog/store',[BlogController::class,'blogsStore'])->name('blog.store');

//Route::get('/blog/create',[BlogController::class,'blogsCreate'])->name('blog.create');




Route::get("/all/contact",[ContactController::class,'showallContact'])->name('show.all.contact');



Route::get('/all/member',[MemberManageController::class,'allMemberManage'])->name('all.member.backend');
Route::get('/paid/member',[MemberManageController::class,'paidMemberManage'])->name('paid.member.backend');

Route::get('/match/member',[MemberManageController::class,'matchMemberManage'])->name('match.member.backend');
