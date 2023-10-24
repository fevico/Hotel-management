<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\RoomController;
use App\Http\Controllers\CategoryControler;
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

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/dashboard', function () { 
    return view('user.index');
})->middleware(['auth', 'verified'])->name('dashboard'); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user-logout');

Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/profile/view', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');

});


Route::middleware(['auth','role:admin'])->group(function(){
    Route::controller(SliderController::class)->group(function(){
        Route::get('/admin/add/slider', 'AdminAddSlider')->name('admin-slider');
        Route::get('/admin/all/slider', 'AdminAllSlider')->name('admin-all-slider');
        Route::post('/slider/store', 'SliderStore')->name('slider.store');
        Route::get('/edit/slider/{id}', 'SliderEdit')->name('edit-slider');
        Route::post('/update/slider', 'SliderUpdate')->name('slider.update');
        Route::get('/delete/slider/{id}', 'SliderDelete')->name('delete-slider');
    });
// category all route 
    Route::controller(CategoryControler::class)->group(function(){
        Route::get('/all/category', 'AllCetegory')->name('all-category');
        Route::get('/add/category', 'AddCetegory')->name('add-category');
        Route::post('/store/category', 'CetegoryStore')->name('category-store');
    });
// about all route 
    Route::controller(AboutController::class)->group(function(){
        Route::get('/update/about', 'UpdateAbout')->name('update-about');
        Route::post('/store/about', 'StoreAbout')->name('about.store');
    });

    Route::controller(RoomController::class)->group(function(){
        Route::get('/all/room', 'AllRoom')->name('all-room');
        Route::get('/add/room', 'AddRoom')->name('add-room');
        Route::post('/room/store', 'RoomStore')->name('room.store');
        Route::get('/room/edit/{id}', 'RoomEdit')->name('edit-room');
        Route::post('/room/update', 'RoomUpdate')->name('room.update');
        Route::get('/room/delete/{id}', 'RoomDelete')->name('delete-room');
    });

}); 
require __DIR__.'/auth.php';
