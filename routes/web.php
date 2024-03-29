<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BlogController;


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
// web.php

Route::get('/destination', [DestinationController::class,'index'])->name('destination');
Route::get('/blog', [BlogController::class,'index'])->name('blog');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
// Route::get('/login', 'LoginController@index')->name('login');


Route::get('/', function () {
    return view('welcome');
});
// tasks routes
Route::resource('tasks', TasksController::class);


/**
 * Route for displaying the dashboard.
 *
 * @return \Illuminate\Contracts\View\View
 */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/**
 * Group of routes that require authentication.
 */
Route::middleware('auth')->group(function () {
    /**
     * Route for editing the user profile.
     *
     * @return \Illuminate\Contracts\View\View
     */
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    /**
     * Route for updating the user profile.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    /**
     * Route for deleting the user profile.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * Include the authentication routes file.
 */
require __DIR__.'/auth.php';

