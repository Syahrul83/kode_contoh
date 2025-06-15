<?php



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\KariyawanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\SupplayerController;
use App\Http\Controllers\Auth\LoginController;

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
    return redirect('login');
});
Route::get('/konsumen', [KonsumenController::class, "konsumen"]);
// Route::get('/foam', function () {
//     return view('foam');
// });
// Route::get('/foam', function () {
//     return view('konsumen.index');
// });

Route::middleware(['auth'])->group(function () {

    Route::get('/pelanggan', [PelangganController::class, "index"])->name("pelanggan.index");
    Route::get('/pelanggan/create', [PelangganController::class, "create"])->name('pelanggan.create');
    Route::post('/pelanggan', [PelangganController::class, "store"])->name('pelanggan.store');
    Route::delete('/pelanggan/{id}', [PelangganController::class, "destroy"])->name('pelanggan.destroy');
    Route::get('/pelanggan/{id}/edit', [PelangganController::class, "edit"])->name('pelanggan.edit');
    Route::put('/pelanggan/{id}', [PelangganController::class, "update"])->name('pelanggan.update');

    Route::get('/barang', [BarangController::class, "index"])->name("barang.index");
    Route::get('/barang/create', [BarangController::class, "create"])->name('barang.create');
    Route::post('/barang', [BarangController::class, "store"])->name('barang.store');
    Route::delete('/barang/{id}', [BarangController::class, "destroy"])->name('barang.destroy');
    Route::get('/barang/{id}/edit', [BarangController::class, "edit"])->name('barang.edit');
    Route::put('/barang/{id}', [BarangController::class, "update"])->name('barang.update');

    Route::get('/kariyawan', [KariyawanController::class, "index"])->name("kariyawan.index");
    Route::get('/kariyawan/create', [kariyawanController::class, "create"])->name('kariyawan.create');
    Route::post('/kariyawan', [KariyawanController::class, "store"])->name('kariyawan.store');
    Route::delete('/kariyawan/{id}', [KariyawanController::class, "destroy"])->name('kariyawan.destroy');
    Route::get('/kariyawan/{id}/edit', [KariyawanController::class, "edit"])->name('kariyawan.edit');
    Route::put('/kariyawan/{id}', [KariyawanController::class, "update"])->name('kariyawan.update');

    Route::get('/supplayer', [SupplayerController::class, "index"])->name("supplayer.index");
    Route::get('/supplayer/create', [SupplayerController::class, "create"])->name('supplayer.create');
    Route::post('/supplayer', [SupplayerController::class, "store"])->name('supplayer.store');
    Route::delete('/supplayer/{id}', [SupplayerController::class, "destroy"])->name('supplayer.destroy');
    Route::get('/supplayer/{id}/edit', [SupplayerController::class, "edit"])->name('supplayer.edit');
    Route::put('/supplayer/{id}', [SupplayerController::class, "update"])->name('supplayer.update');

    Route::get('/user', [UserController::class, "index"])->name("user.index");
    Route::get('/user/create', [UserController::class, "create"])->name('user.create');
    Route::post('/user', [UserController::class, "store"])->name('user.store');
    Route::delete('/user/{id}', [UserController::class, "destroy"])->name('user.destroy');
    Route::get('/user/{id}/edit', [UserController::class, "edit"])->name('user.edit');
    Route::put('/user/{id}', [UserController::class, "update"])->name('user.update');

    Route::get('/obat', [ObatController::class, "index"])->name("obat.index");
    Route::get('/obat/create', [ObatController::class, "create"])->name('obat.create');
    Route::post('/obat', [ObatController::class, "store"])->name('obat.store');
    Route::delete('/obat/{id}', [ObatController::class, "destroy"])->name('obat.destroy');
    Route::get('/obat/{id}/edit', [ObatController::class, "edit"])->name('obat.edit');
    Route::put('/obat/{id}', [ObatController::class, "update"])->name('obat.update');
});



Auth::routes([
    'register' => true,
    'reset' => false,
    'verify' => false
]);

// Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda.index');
