<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KategoriMenuController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\StokMakananDanMinumanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiPembeliController;


// Halaman Dashboard Utama
Route::get('/', function () {
    return view('admin.index');
});

// Menu
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/menu', function () {
    return view('admin.menu');
});
Route::get('/kategorimenu', function () {
    return view('admin.kategorimenu');
});
Route::get('/pegawai', function () {
    return view('admin.pegawai');
});
Route::get('/pembeli', function () {
    return view('admin.pembeli');
});
// Route::get('/transaksi', function () {
//     return view('admin.transaksi');
// });
// Route::get('/stokmakanandanminuman', function () {
//     return view('admin.stokmakanandanminuman');
// });
// Route::get('/tambahmenu', function () {
//     return view('admin.tambahmenu');
// });
// Route::post('/stormenu', function () {
//     return view('admin.stormenu');
// });
// Route::get('/editmenu', function () {
//     return view('admin.editmenu');
// });
Route::get('/editstok', function () {
    return view('admin.editstok');
});
Route::get('/transaksipembeli', function () {
    return view('admin.transaksipembeli');
});
// Route::get('/tambahpegawai', function () {
//     return view('admin.tambahpegawai');
// });
// Route::post('/storpegawai', function () {
//     return view('admin.storpegawai');
// });
// Route::get('/tambahpembeli', function () {
//     return view('admin.tambahpembeli');
// });
// Route::post('/storpembeli', function () {
//     return view('admin.storpembeli');
// });
// Route::get('/tambahtransaksi', function () {
//     return view('admin.tambahtransaksi');
// });
// Route::post('/stortransaksi', function () {
//     return view('admin.stortransaksi');
// });
Route::get('/tambahkategorimenu', function () {
    return view('admin.tambahkategorimenu');
});
// Route::get('/tambahstokmakanandanminuman', function () {
//     return view('admin.tambahstok');
// });
// Route::post('/storstokmakanandanminuman', function () {
//     return view('admin.storstokmakanandanminuman');
// });
// Route::get('/tambahkategorimenu', function () {
//     return view('admin.tambahkategorimenu');
// });
// Route::post('/storkategorimenu', function () {
//     return view('admin.storkategorimenu');
// });


Route::get('menu', [MenuController::class,'index'])->name('menu.index');
Route::get('menu/create', [MenuController::class,'create'])->name('menu.create');
Route::post('menu/store', [MenuController::class,'store'])->name('menu.store');
Route::get('menu/edit/{id}', [MenuController::class,'edit'])->name('menu.edit');
Route::put('menu/update/{id}', [MenuController::class,'update'])->name('menu.update');
Route::delete('menu/destroy/{id}', [MenuController::class,'destroy'])->name('menu.destroy');
Route::get('menu/detail/{id}', [MenuController::class,'show'])->name('menu.show');

Route::get('kategorimenu', [KategoriMenuController::class,'index'])->name('kategorimenu');
Route::get('kategorimenu/create', [KategoriMenuController::class,'create'])->name('kategorimenu.create');
Route::post('kategorimenu/store', [KategoriMenuController::class,'store'])->name('kategorimenu.store');
Route::get('kategorimenu/edit/{id}', [KategoriMenuController::class,'edit'])->name('kategorimenu.edit');
Route::put('kategorimenu/update/{id}', [KategoriMenuController::class,'update'])->name('kategorimenu.update');
Route::delete('kategorimenu/destroy/{id}', [KategoriMenuController::class,'destroy'])->name('kategorimenu.destroy');
Route::get('kategorimenu/detail/{id}', [KategoriMenuController::class,'show'])->name('kategorimenu.show');


Route::get('pegawai', [PegawaiController::class,'index'])->name('pegawai');
Route::get('pegawai/create', [PegawaiController::class,'create'])->name('pegawai.create');
Route::post('pegawai/store', [PegawaiController::class,'store'])->name('pegawai.store');
Route::get('pegawai/edit/{id}', [PegawaiController::class,'edit'])->name('pegawai.edit');
Route::put('pegawai/update/{id}', [PegawaiController::class,'update'])->name('pegawai.update');
Route::delete('pegawai/destroy/{id}', [PegawaiController::class,'destroy'])->name('pegawai.destroy');
Route::get('pegawai/detail/{id}', [PegawaiController::class,'show'])->name('pegawai.show');

Route::get('pembeli', [PembeliController::class,'index'])->name('pembeli,index');
Route::get('pembeli/create', [PembeliController::class,'create'])->name('pembeli.create');
Route::post('pembeli/store', [PembeliController::class,'store'])->name('pembeli.store');
Route::get('pembeli/edit/{id}', [PembeliController::class,'edit'])->name('pembeli.edit');
Route::put('pembeli/update/{id}', [PembeliController::class,'update'])->name('pembeli.update');
Route::delete('pembeli/destroy{id}', [PembeliController::class,'destroy'])->name('pembeli.destroy');
Route::get('pembeli/detail/{id}', [PembeliController::class,'show'])->name('pembeli.show');

Route::get('stokmakanandanminuman', [StokMakananDanMinumanController::class,'index'])->name('stokmakanandanminuman');
Route::get('stokmakanandanminuman/create', [StokMakananDanMinumanController::class,'create'])->name('stokmakanandanminuman.create');
Route::post('stokmakanandanminuman/store', [StokMakananDanMinumanController::class,'store'])->name('stokmakanandanminuman.store');
Route::get('stokmakanandanminuman/edit/{id}', [StokMakananDanMinumanController::class,'edit'])->name('stokmakanandanminuman.edit');
Route::put('stokmakanandanminuman/update/{id}', [StokMakananDanMinumanController::class,'update'])->name('stokmakanandanminuman.update');
Route::delete('stokmakanandanminuman/destroy/{id}', [StokMakananDanMinumanController::class,'destroy'])->name('stokmakanandanminuman.destroy');
Route::get('stokmakanandanminuman/detai/{id}', [StokMakananDanMinumanController::class,'show'])->name('stokmakanandanminuman.show');

Route::get('transaksi', [TransaksiController::class,'index'])->name('transaksi');
Route::get('transaksi/create', [TransaksiController::class,'create'])->name('transaksi.create');
Route::post('transaksi/store', [TransaksiController::class,'store'])->name('transaksi.store');
Route::get('transaksi/edit/{id}', [TransaksiController::class,'edit'])->name('transaksi.edit');
Route::put('transaksi/update/{id}', [TransaksiController::class,'update'])->name('transaksi.update');
Route::delete('transaksi/destroy/{id}', [TransaksiController::class,'destroy'])->name('transaksi.destroy');
Route::get('transaksi/detail/{id}', [TransaksiController::class,'show'])->name('transaksi.show');

Route::resource('pegawai', PegawaiController::class);
// Route::resource('menu', MenuController::class);
Route::resource('pembeli', PembeliController::class);
// Route::resource('transaksi', TransaksiController::class);
// Route::resource('stokmakanandanminuman', StokMakanandanMinumanController::class);
// Route::resource('kategorimenu', KategoriMenuController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('transaksipembeli', [TransaksiPembeliController::class,'index'])->name('transaksipembeli');
Route::get('transaksipembeli/create', [TransaksiPembeliController::class,'create'])->name('transaksipembeli.create');
Route::post('transaksipembeli/store', [TransaksiPembeliController::class,'store'])->name('transaksipembeli.store');
Route::get('transaksipembeli/edit/{id}', [TransaksiPembeliController::class,'edit'])->name('transaksipembeli.edit');
Route::put('transaksipembeli/update/{id}', [TransaksiPembeliController::class,'update'])->name('transaksipembeli.update');
Route::delete('transaksipembeli/destroy/{id}', [TransaksiPembeliController::class,'destroy'])->name('transaksipembeli.destroy');
Route::get('transaksipembeli/detail/{id}', [TransaksiPembeliController::class,'show'])->name('transaksipembeli.show');
Route::post('transaksipembeli/proses', [TransaksiPembeliController::class, 'proses'])->name('proses.transaksi');


