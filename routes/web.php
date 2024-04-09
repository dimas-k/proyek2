<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PatenController;
use App\Http\Controllers\HakCiptaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminPatenController;
use App\Http\Controllers\AdminHaKCiptaController;
use App\Http\Controllers\DesainIndustriController;
use App\Http\Controllers\AdminDesainIndustriController;

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
    return view('landing-page.index');
});

Route::get('/home', function () {
    return view('umum.index');
});

Route::get('/pengajuan-paten',[PatenController::class, 'showPengajuan']);
Route::post('/simpanpaten',[PatenController::class,'store']);

Route::post('/simpanhk',[HakCiptaController::class,'store']);
Route::get('/pengajuan-hak-cipta',[HakCiptaController::class, 'pengajuan']);

Route::get('/pengajuan-desain-industri',[DesainIndustriController::class, 'pengajuan']);
Route::post('/simpandi',[DesainIndustriController::class,'store']);

Route::get('/paten',[PatenController::class, 'index']);
Route::get('/paten/show/{id}',[PatenController::class, 'show'])->name('paten.show');
Route::get('/paten/cari',[PatenController::class, 'search'])->name('paten.cari');
Route::get('/paten/pemeriksaan-formalitas',[PatenController::class, 'pemeriksaanFormalitas']);
Route::get('/paten/menunggu-tanggapan-formalitas',[PatenController::class, 'menungguTanggapan']);
Route::get('/paten/masa-pengumuman',[PatenController::class, 'masaPengumuman']);
Route::get('/paten/meunggu-pembayaran-substansif',[PatenController::class, 'pembayaranSubstansif']);
Route::get('/paten/substansif-tahap-awal',[PatenController::class, 'substansifAwal']);
Route::get('/paten/substansif-tahap-lanjut',[PatenController::class, 'substansifLanjut']);
Route::get('/paten/substansif-tahap-akhir',[PatenController::class, 'substansifAkhir']);
Route::get('/paten/menunggu-tanggapan-substansif',[PatenController::class, 'mengungguTanggapanSubstansif']);
Route::get('/paten/diberi',[PatenController::class, 'diberi']);
Route::get('/paten/ditolak',[PatenController::class, 'ditolak']);

Route::get('/hak-cipta',[HakCiptaController::class, 'index']);
Route::get('/hak-cipta/tercatat',[HakCiptaController::class, 'listTercatat']);
Route::get('/hak-cipta/ditolak',[HakCiptaController::class, 'tolak']);
Route::get('/hak-cipta/keterangan-belum-lengkap',[HakCiptaController::class, 'belumLengkap']);
Route::get('/hak-cipta/show/{id}',[HakCiptaController::class, 'show'])->name('hak-cipta.show');

Route::get('/desain-industri',[DesainIndustriController::class, 'index']);
Route::get('/desain-industri/diberi',[DesainIndustriController::class, 'diberi']);
Route::get('/desain-industri/dalam-proses-usulan',[DesainIndustriController::class, 'proses']);
Route::get('/desain-industri/pemeriksaan',[DesainIndustriController::class, 'pemeriksaan']);
Route::get('/desain-industri/ditolak',[DesainIndustriController::class, 'ditolak']);
Route::get('/desain-industri/keterangan-belum-lengkap',[DesainIndustriController::class, 'keteranganBelumLengkap']);
Route::get('/desain-industri/show/{id}',[DesainIndustriController::class, 'show'])->name('desain-industri.show');

Route::get('/login-admin',[AdminController::class,'index'])->name('login')->middleware('guest'); 
Route::post('/autentikasi',[AdminController::class,'authenticate']);
Route::get('/logout', [AdminController::class, 'logout']);
Route::get('/admin/dashboard', [DashboardController::class,'index'])->middleware('auth');

Route::get('/admin/paten',[AdminPatenController::class, 'index'])->middleware('auth');
Route::get('/admin/paten/pemeriksaan-formalitas',[AdminPatenController::class, 'pemeriksaanFormalitas']);
Route::get('/admin/paten/menunggu-tanggapan-formalitas',[AdminPatenController::class, 'menungguTanggapan']);
Route::get('/admin/paten/masa-pengumuman',[AdminPatenController::class, 'masaPengumuman']);
Route::get('/admin/paten/menunggu-pembayaran-substansif',[AdminPatenController::class, 'pembayaranSubstansif']);
Route::get('/admin/paten/substansif-tahap-awal',[AdminPatenController::class, 'substansifAwal']);
Route::get('/admin/paten/substansif-tahap-lanjut',[AdminPatenController::class, 'substansifLanjut']);
Route::get('/admin/paten/substansif-tahap-akhir',[AdminPatenController::class, 'substansifAkhir']);
Route::get('/admin/paten/menunggu-tanggapan-substansif',[AdminPatenController::class, 'mengungguTanggapanSubstansif']);
Route::get('/admin/paten/diberi',[AdminPatenController::class, 'diberi']);
Route::get('/admin/paten/ditolak',[AdminPatenController::class, 'ditolak']);

Route::get('/admin/paten/delete/{id}',[AdminPatenController::class, 'destroy'])->name('admin_paten.delete');
Route::get('/admin/paten/edit/{id}',[AdminPatenController::class, 'edit'])->name('admin_paten.edit');
Route::post('/admin/paten/update/{id}',[AdminPatenController::class, 'update'])->name('admin_paten.update');
Route::get('/admin/paten/show/{id}',[AdminPatenController::class, 'show'])->name('admin_paten.show');

Route::get('/admin/listadmin',[AdminController::class, 'lihat'])->middleware('auth');
Route::get('/admin/listadmin/edit/{id}',[AdminController::class, 'edit'])->name('admin.edit');
Route::post('/admin/listadmin/update/{id}',[AdminController::class, 'update'])->name('admin.update');
Route::get('/admin/listadmin/delete/{id}',[AdminController::class, 'destroy'])->name('admin.delete');
Route::get('/admin/listadmin/tambah',[AdminController::class, 'create'])->name('admin.tambah');
Route::post('/simpan',[AdminController::class,'store']);

Route::get('/admin/hak-cipta',[AdminHaKCiptaController::class, 'index'])->middleware('auth');
Route::get('/admin/hak-cipta/delete/{id}',[AdminHaKCiptaController::class, 'destroy'])->name('admin_hakcipta.delete');
Route::get('/admin/hak-cipta/edit/{id}',[AdminHaKCiptaController::class, 'edit'])->name('admin_hakcipta.edit');
Route::post('/admin/hak-cipta/update/{id}',[AdminHaKCiptaController::class, 'update'])->name('admin_hakcipta.update');
Route::get('/admin/hak-cipta/show/{id}',[AdminHaKCiptaController::class, 'show'])->name('admin_hakcipta.show');
Route::get('/admin/hak-cipta/tercatat',[AdminHaKCiptaController::class, 'listTercatat']);
Route::get('/admin/hak-cipta/ditolak',[AdminHaKCiptaController::class, 'tolak']);
Route::get('/admin/hak-cipta/keterangan-belum-lengkap',[AdminHaKCiptaController::class, 'belumLengkap']);

Route::get('/admin/desain-industri',[AdminDesainIndustriController::class, 'index'])->middleware('auth');
Route::get('/admin/desain-industri/diberi',[AdminDesainIndustriController::class, 'diberi']);
Route::get('/admin/desain-industri/dalam-proses-usulan',[AdminDesainIndustriController::class, 'proses']);
Route::get('/admin/desain-industri/pemeriksaan',[AdminDesainIndustriController::class, 'pemeriksaan']);
Route::get('/admin/desain-industri/ditolak',[AdminDesainIndustriController::class, 'ditolak']);
Route::get('/admin/desain-industri/keterangan-belum-lengkap',[AdminDesainIndustriController::class, 'keteranganBelumLengkap']);
Route::get('/admin/desain-industri/delete/{id}',[AdminDesainIndustriController::class, 'destroy'])->name('admin_desainindustri.delete');
Route::get('/admin/desain_industri/edit/{id}',[AdminDesainIndustriController::class, 'edit'])->name('admin_desainindustri.edit');
Route::post('/admin/desain-industri/update/{id}',[AdminDesainIndustriController::class, 'update'])->name('admin_desainindustri.update');
Route::get('/admin/desain-industri/show/{id}',[AdminDesainIndustriController::class, 'show'])->name('admin_desainindustri.show');


