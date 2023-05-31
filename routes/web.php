    <?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', App\Http\Controllers\FrontEndController::class, 'index')

Route::get('/', [App\Http\Controllers\FrontEndController::class, 'index']);
Route::get('/detail-artikel/{slug}', [App\Http\Controllers\FrontEndController::class, 'show'])->name('detail-artikel');
Route::get('/kategori/{slug}', [App\Http\Controllers\FrontEndController::class, 'kategori'])->name('kategori');

Auth::routes();
Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('Dashboard');
    Route::resource('/kategori', App\Http\Controllers\KategoriController::class);
    Route::resource('/artikel', App\Http\Controllers\ArtikelController::class);
    Route::resource('/penulis', App\Http\Controllers\PenulisController::class);
    Route::resource('/tentang-kami', App\Http\Controllers\TentangKamiController::class);

});
