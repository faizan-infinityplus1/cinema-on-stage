<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/about-show', [MainController::class, 'aboutshow'])->name('about.show');
Route::get('/book-now', [MainController::class, 'booknow'])->name('book.now');
Route::get('/past-shows', [MainController::class, 'pastshows'])->name('past.shows');
Route::get('/contact-us', [MainController::class, 'contactus'])->name('contact.us');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/blog-1', [MainController::class, 'blog1'])->name('blog1');
Route::get('/terms-and-condition', [MainController::class, 'termsandcondition'])->name('terms.condition');
Route::prefix('/adcinema753')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/', [AuthenticatedSessionController::class, 'create'])
            ->name('login');
    });
    Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    Route::prefix('/manage-blogs')->group(function () {

        Route::get('/', [UserController::class, 'view'])->name('users');
        Route::get('/users/add', [UserController::class, 'create'])->name('users.add');
        Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
        Route::get('/edit/{slug}', [UserController::class, 'edit'])->name('users.edit');
        Route::post('/update/{slug}', [UserController::class, 'update'])->name('users.update');
        Route::post('/users/delete', [UserController::class, 'delete'])->name('users.delete');
    });
});

require __DIR__ . '/auth.php';
