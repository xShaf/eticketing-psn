<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

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

require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('/home');
});

Route::get('/home', [HomeController::class, 'index']);

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
Route::get('/access', [PageController::class, 'showAccess']);
