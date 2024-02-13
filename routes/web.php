<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\PurchaseController;
use App\Models\Carousel;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/', [PageController::class, 'home']);

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'formTo'])->name('admin.formTo');
    Route::get('/admin/add', [PageController::class, 'showAddUser']);
    Route::post('/admin/add', [AdminController::class, 'addUser'])->name('user.add');
    Route::get('/admin/edit', [PageController::class, 'showUserEdit'])->name('user.edit');
    Route::get('/admin/user-list', [AdminController::class, 'displayUsers'])->name('user.display');
    Route::get('/admin/user-list/{user}/edit', [AdminController::class, 'editUser'])->name('user.edit');
    Route::patch('/admin/users/{user}/update', [AdminController::class, 'updateUser'])->name('user.update');
    Route::delete('/admin/users/{user}/delete', [AdminController::class, 'destroyUser'])->name('user.destroy');
});

Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin/splash', [PageController::class, 'showNotice'])->name('admin.notice');
    Route::patch('/admin/splash', [NoticeController::class, 'update'])->name('notice.update');

    Route::get('/admin/carousel', [CarouselController::class, 'index'])->name('carousel.index');
    Route::get('/admin/carousel/add', [CarouselController::class, 'add'])->name('carousel.add');
    Route::post('/admin/carousel/store', [CarouselController::class, 'store'])->name('carousel.store');
    Route::delete('/admin/carousel/{carousel}/delete', [CarouselController::class, 'destroy'])->name('carousel.delete');
    Route::get('/admin/sidebar', [PageController::class, 'showSidebar'])->name('admin.sidebar');
});

Route::get('/home', [PageController::class, 'home']);

Route::get('/profile-korporat', [PageController::class, 'showProfileKorporat']);
Route::get('/carta-organisasi', [PageController::class, 'showCartaOrganisasi']);
Route::get('/piagam-pelanggan', [PageController::class, 'showPiagamPelanggan']);
Route::get('/konsep-peranan', [PageController::class, 'showKonsepPeranan']);

Route::get('/dinosaur-encounter', [PageController::class, 'showDinosaurEncounter']);
Route::get('/obskura-xr', [PageController::class, 'showObskuraXR']);
Route::get('/bayaran-masuk', [PageController::class, 'showBayaranMasuk']);
Route::get('/borang-tempahan-maklumbalas', [PageController::class, 'showBorangTempahan']);
Route::get('/direktori-pegawai', [PageController::class, 'showDirektoriPegawai']);
Route::get('/galeri-pameran', [PageController::class, 'showGaleriPameran']);
Route::get('/garis-panduan', [PageController::class, 'showGarisPanduan']);
Route::get('/merancang-lawatan', [PageController::class, 'showMerancangLawatan']);
Route::get('/pelan-pembangunan', [PageController::class, 'showPelanBangunanPusatSainsNegara']);
Route::get('/soalan-lazim', [PageController::class, 'showSoalanLazim']);
Route::get('/waktu-operasi', [PageController::class, 'showWaktuOperasi']);
Route::get('/access', [PageController::class, 'showAccess'])->middleware('guest');

Route::middleware('auth')->group(function(){
    Route::get('/forms', [PurchaseController::class, 'index']);
});
