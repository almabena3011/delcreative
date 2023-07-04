<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\DownvoteController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LabCategoryController;
use App\Http\Controllers\ReportCommentController;
use App\Http\Controllers\ForumCommentController;
use App\Http\Controllers\ListPelanggaranController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\UpvoteController;
use App\Http\Controllers\ChangePasswordController;

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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('users', 'UserController@index');

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [HomeController::class, 'admin']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('@{username}', [UsersController::class, 'showprofile']);
    Route::put('/user/{username}', [UsersController::class, 'update']);
    Route::get('/{username}/password', [ChangePasswordController::class, 'edit']);
    Route::put('/password/update', [ChangePasswordController::class, 'update']);
    Route::get('/dashboard', [FrontendController::class, 'index']);
    Route::middleware(['verify'])->group(function () {
        Route::middleware(['admin'])->group(function () {
            Route::get('/admin', [App\Http\Controllers\AdminController::class, 'akun'])->name('administrator.listakun');
            Route::post('/admin/{user}/make-verify', [App\Http\Controllers\AdminController::class, 'makeVerify'])->name('administrator.make-verify');
            Route::post('/admin/{user}/reject', [App\Http\Controllers\AdminController::class, 'rejectAccount'])->name('administrator.reject');
            Route::get('/admin/listpelanggaran', [AdminController::class, 'listpelanggaran']);
            Route::get('categories', [CategoryController::class, 'index']);
            Route::get('add-categories', [CategoryController::class, 'add']);
            Route::post('insert-category', [CategoryController::class, 'insert']);
            Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
            Route::put('update-category/{id}', [CategoryController::class, 'update']);
            Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);

            Route::get('soal', [SoalController::class, 'index']);
            Route::get('add-soal', [SoalController::class, 'add']);
            Route::post('insert-soal', [SoalController::class, 'insert']);
            Route::get('edit-soal/{id}', [SoalController::class, 'edit']);
            Route::put('update-soal/{id}', [SoalController::class, 'update']);
            Route::get('delete-soal/{id}', [SoalController::class, 'destroy']);
            Route::get('akun', [AdminController::class, 'akun']);
            Route::get('validasipelanggaran/{id}', [AdminController::class, 'validasipelanggaran']);
            Route::get('tolakpelanggaran/{id}', [AdminController::class, 'tolakpelanggaran']);
        });

        Route::get('/lab', [LabController::class, 'index']);
        Route::get('category', [LabCategoryController::class, 'index']);
        Route::get('/view-language/{language}', [LabCategoryController::class, 'daftarsoal']);

        Route::get('view-exercise/{id}', [LabCategoryController::class, 'lab']);
        // Route::get('view-exercise/{laguage}/{id}', [LabCategoryController::class, 'lab']);
        Route::post('/jawab', [LabCategoryController::class, 'cek']);
        // nested resource
        Route::resource('forum.comments', CommentController::class)->shallow();
        Route::resource('forum', ForumController::class);
        Route::get('/comment/{id}/report', [ReportCommentController::class, 'reportComment']);
        Route::get('/mark/{id}', [ForumCommentController::class, 'markcomment']);



        //dummy
        Route::get('/leaderboard', [ForumController::class, 'leaderboard']);
        Route::get('/konversi', [ForumController::class, 'konversi']);
        Route::get('/konversi/{id}', [ForumController::class, 'doconversion']);
        Route::get('/asrama/konversi', [ForumController::class, 'conversionlist']);
        Route::get('/konversi/{id}/validasi', [ForumController::class, 'validasi']);
        // List pelanggaran dosen dan asrama
        Route::get('/listpelanggaran', [ListPelanggaranController::class, 'listpelanggaran']);
        //Upvoted & Downvote
        Route::get('/upvote/{id}', [UpvoteController::class, 'upvotecomment']);
        Route::get('/downvote/{id}', [DownvoteController::class, 'downvotecomment']);

        //Leaderboard
        Route::get('/leaderboard', [LeaderboardController::class, 'index']);
        Route::get('/leaderboard/search', [LeaderboardController::class, 'search']);
        // Route::post('/leaderboard/search', [LeaderboardController::class, 'searchStudents'])->name('student.search');
    });
});


Route::post('ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.image-upload')->middleware('auth');
