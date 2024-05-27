<?php

use App\Http\Controllers\UmumController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PatenController;
use App\Http\Controllers\HakCiptaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminPatenController;
use App\Http\Controllers\AdminHaKCiptaController;
use App\Http\Controllers\DesainIndustriController;
use App\Http\Controllers\AdminDesainIndustriController;
use App\Http\Controllers\CheckerController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\ForgetPasswordManager;


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
    return view('umum-page.landing-page.index');
});

Route::get('/coba', function () {
    return view('dosen.index');
});

Route::get('/pengajuan-paten', [PatenController::class, 'showPengajuan']);
Route::post('/simpanpaten', [PatenController::class, 'store']);

Route::post('/simpanhk', [HakCiptaController::class, 'store']);
Route::get('/pengajuan-hak-cipta', [HakCiptaController::class, 'pengajuan']);

Route::get('/pengajuan-desain-industri', [DesainIndustriController::class, 'pengajuan']);
Route::post('/simpandi', [DesainIndustriController::class, 'store']);

Route::get('/paten', [PatenController::class, 'index']);
Route::get('/paten/show/{id}', [PatenController::class, 'show'])->name('paten.show');
Route::get('/paten/pemeriksaan-formalitas', [PatenController::class, 'pemeriksaanFormalitas']);
Route::get('/paten/menunggu-tanggapan-formalitas', [PatenController::class, 'menungguTanggapan']);
Route::get('/paten/masa-pengumuman', [PatenController::class, 'masaPengumuman']);
Route::get('/paten/meunggu-pembayaran-substansif', [PatenController::class, 'pembayaranSubstansif']);
Route::get('/paten/substansif-tahap-awal', [PatenController::class, 'substansifAwal']);
Route::get('/paten/substansif-tahap-lanjut', [PatenController::class, 'substansifLanjut']);
Route::get('/paten/substansif-tahap-akhir', [PatenController::class, 'substansifAkhir']);
Route::get('/paten/menunggu-tanggapan-substansif', [PatenController::class, 'mengungguTanggapanSubstansif']);
Route::get('/paten/diberi', [PatenController::class, 'diberi']);
Route::get('/paten/ditolak', [PatenController::class, 'ditolak']);
Route::get('/cari', [PatenController::class, 'cari'])->name('paten.cari');

Route::get('/hak-cipta', [HakCiptaController::class, 'index']);
Route::get('/hak-cipta/tercatat', [HakCiptaController::class, 'listTercatat']);
Route::get('/hak-cipta/ditolak', [HakCiptaController::class, 'tolak']);
Route::get('/hak-cipta/keterangan-belum-lengkap', [HakCiptaController::class, 'belumLengkap']);
Route::get('/hak-cipta/show/{id}', [HakCiptaController::class, 'show'])->name('hak-cipta.show');
Route::get('/cari/hak-cipta', [HakCiptaController::class, 'cari'])->name('hc.cari');

Route::get('/desain-industri', [DesainIndustriController::class, 'index']);
Route::get('/desain-industri/diberi', [DesainIndustriController::class, 'diberi']);
Route::get('/desain-industri/dalam-proses-usulan', [DesainIndustriController::class, 'proses']);
Route::get('/desain-industri/pemeriksaan', [DesainIndustriController::class, 'pemeriksaan']);
Route::get('/desain-industri/ditolak', [DesainIndustriController::class, 'ditolak']);
Route::get('/desain-industri/keterangan-belum-lengkap', [DesainIndustriController::class, 'keteranganBelumLengkap']);
Route::get('/desain-industri/show/{id}', [DesainIndustriController::class, 'show'])->name('desain-industri.show');

Route::get('/login-admin', [AdminController::class, 'index'])->name('login');
Route::post('/autentikasi', [AdminController::class, 'authenticate']);
Route::get('/logout', [AdminController::class, 'logout']);

Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboardAdmin'])->middleware('auth');
    Route::get('/admin/paten', [AdminPatenController::class, 'index'])->middleware('auth');
    Route::get('/admin/paten/pemeriksaan-formalitas', [AdminPatenController::class, 'pemeriksaanFormalitas']);
    Route::get('/admin/paten/menunggu-tanggapan-formalitas', [AdminPatenController::class, 'menungguTanggapan']);
    Route::get('/admin/paten/masa-pengumuman', [AdminPatenController::class, 'masaPengumuman']);
    Route::get('/admin/paten/menunggu-pembayaran-substansif', [AdminPatenController::class, 'pembayaranSubstansif']);
    Route::get('/admin/paten/substansif-tahap-awal', [AdminPatenController::class, 'substansifAwal']);
    Route::get('/admin/paten/substansif-tahap-lanjut', [AdminPatenController::class, 'substansifLanjut']);
    Route::get('/admin/paten/substansif-tahap-akhir', [AdminPatenController::class, 'substansifAkhir']);
    Route::get('/admin/paten/menunggu-tanggapan-substansif', [AdminPatenController::class, 'mengungguTanggapanSubstansif']);
    Route::get('/admin/paten/diberi', [AdminPatenController::class, 'diberi']);
    Route::get('/admin/paten/ditolak', [AdminPatenController::class, 'ditolak']);

    Route::get('/admin/paten/delete/{id}', [AdminPatenController::class, 'destroy'])->name('admin_paten.delete');
    Route::get('/admin/paten/edit/{id}', [AdminPatenController::class, 'edit'])->name('admin_paten.edit');
    Route::post('/admin/paten/update/{id}', [AdminPatenController::class, 'update'])->name('admin_paten.update');
    Route::get('/admin/paten/show/{id}', [AdminPatenController::class, 'show'])->name('admin_paten.show');

    Route::get('/admin/listadmin', [AdminController::class, 'lihat'])->middleware('auth');
    Route::get('/admin/listadmin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::post('/admin/listadmin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::get('/admin/listadmin/delete/{id}', [AdminController::class, 'destroy'])->name('admin.delete');
    Route::get('/admin/listadmin/tambah', [AdminController::class, 'create'])->name('admin.tambah');
    Route::post('/simpan', [AdminController::class, 'store']);

    Route::get('/admin/hak-cipta', [AdminHaKCiptaController::class, 'index'])->middleware('auth');
    Route::get('/admin/hak-cipta/delete/{id}', [AdminHaKCiptaController::class, 'destroy'])->name('admin_hakcipta.delete');
    Route::get('/admin/hak-cipta/edit/{id}', [AdminHaKCiptaController::class, 'edit'])->name('admin_hakcipta.edit');
    Route::post('/admin/hak-cipta/update/{id}', [AdminHaKCiptaController::class, 'update'])->name('admin_hakcipta.update');
    Route::get('/admin/hak-cipta/show/{id}', [AdminHaKCiptaController::class, 'show'])->name('admin_hakcipta.show');
    Route::get('/admin/hak-cipta/tercatat', [AdminHaKCiptaController::class, 'listTercatat']);
    Route::get('/admin/hak-cipta/ditolak', [AdminHaKCiptaController::class, 'tolak']);
    Route::get('/admin/hak-cipta/keterangan-belum-lengkap', [AdminHaKCiptaController::class, 'belumLengkap']);

    Route::get('/admin/desain-industri', [AdminDesainIndustriController::class, 'index'])->middleware('auth');
    Route::get('/admin/desain-industri/diberi', [AdminDesainIndustriController::class, 'diberi']);
    Route::get('/admin/desain-industri/dalam-proses-usulan', [AdminDesainIndustriController::class, 'proses']);
    Route::get('/admin/desain-industri/pemeriksaan', [AdminDesainIndustriController::class, 'pemeriksaan']);
    Route::get('/admin/desain-industri/ditolak', [AdminDesainIndustriController::class, 'ditolak']);
    Route::get('/admin/desain-industri/keterangan-belum-lengkap', [AdminDesainIndustriController::class, 'keteranganBelumLengkap']);
    Route::get('/admin/desain-industri/delete/{id}', [AdminDesainIndustriController::class, 'destroy'])->name('admin_desainindustri.delete');
    Route::get('/admin/desain_industri/edit/{id}', [AdminDesainIndustriController::class, 'edit'])->name('admin_desainindustri.edit');
    Route::post('/admin/desain-industri/update/{id}', [AdminDesainIndustriController::class, 'update'])->name('admin_desainindustri.update');
    Route::get('/admin/desain-industri/show/{id}', [AdminDesainIndustriController::class, 'show'])->name('admin_desainindustri.show');

    Route::get('/admin/pengguna/umum', [AdminController::class, 'lihatUmum'])->name('lihat.dosen');
    Route::post('/admin/pengguna/umum/tambah', [AdminController::class, 'umumNew'])->name('tambah.umum');

    Route::get('/admin/pengguna/dosen', [AdminController::class, 'lihatDosen'])->name('lihat.dosen');
    Route::get('/admin/pengguna/dosen/{id}', [AdminController::class, 'detailDosen'])->name('detail.Dosen');
    Route::post('/admin/pengguna/dosen/tambah', [AdminController::class, 'dosenNew'])->name('tambah.dosen');
    Route::get('/admin/pengguna/dosen/hapus/{id}', [AdminController::class, 'hapusDosen'])->name('dosen.hapus');
    Route::post('admin/pengguna/dosen/edit/{id}', [AdminController::class, 'editDosen'])->name('dosen.edit');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginUserController::class, 'index']);
    Route::get('/register', [LoginUserController::class, 'regist']);
    Route::get('/register/dosen/', [LoginUserController::class, 'registDosen'])->name('regist.dosen');
    Route::get('/register/umum/', [LoginUserController::class, 'registUmum'])->name('regist.other');
    Route::post('/simpan/akun/', [LoginUserController::class, 'store'])->name('simpan.akun');
    Route::post('/autentikasi/user', [LoginUserController::class, 'autentikasi'])->name('autentikasi.user');
});

Route::middleware(['auth', 'role:Dosen'])->group(function () {
    Route::get('/dosen/dashboard', [DosenController::class, 'index']);

    Route::get('/dosen/paten', [DosenController::class, 'paten']);
    Route::get('/dosen/pengajuan/paten', [DosenController::class, 'pengajuanPaten']);
    Route::post('/dosen/pengajuan/paten/simpan', [DosenController::class, 'storePaten'])->name('simpan.dosen.paten');
    Route::get('/dosen/paten/lihat/{id}', [DosenController::class, 'lihatPaten'])->name('dsn.paten.lihat');
    Route::get('dosen/paten/edit/{id}', [DosenController::class, 'editPaten'])->name('dsn.edit.paten');
    Route::post('/dosen/paten/update/{id}', [DosenController::class, 'updatePaten'])->name('dsn.update.paten');
    Route::get('/dosen/paten/hapus/{id}', [DosenController::class, 'hapusPaten'])->name('dsn.paten.hapus');
    Route::get('/paten/cari', [DosenController::class, 'cariPaten'])->name('paten.cari');


    Route::get('/dosen/hak-cipta', [DosenController::class, 'hakCipta']);
    Route::get('/dosen/hak-cipta/lihat/{id}', [DosenController::class, 'lihatHc'])->name('dsn.lihat.hc');
    Route::get('/dosen/hak-cipta/edit/{id}', [DosenController::class, 'editHc'])->name('dsn.edit.hc');
    Route::post('/dosen/hak-cipta/update/{id}', [DosenController::class, 'updateHc'])->name('dsn.update.hc');
    Route::get('/dosen/hak-cipta/pengajuan', [DosenController::class, 'pengajuanHc']);
    Route::post('/dosen/hak-cipta/pengajuan/simpan', [DosenController::class, 'storeHc']);
    Route::get('/hak-cipta/cari', [DosenController::class, 'cariHc']);

    Route::get('/dosen/desain-industri', [DosenController::class, 'desainIndustri']);
    Route::get('/dosen/desain-industri/pengajuan', [DosenController::class, 'pengajuanDi']);
    Route::get('/dosen/desain-industri/lihat/{id}', [DosenController::class, 'lihatDi'])->name('dsn.di.lihat');
    Route::get('/dosen/desain-industri/edit/{id}', [DosenController::class, 'editDi'])->name('dsn.edit.di');
    Route::post('/dosen/desain-industri/update/{id}', [DosenController::class, 'updateDi'])->name('dsn.update.di');
    Route::post('/dosen/desain-industri/pengajuan/simpan', [DosenController::class, 'storeDi']);
    Route::get('/desain-industri/cari', [DosenController::class, 'cariDi']);

    Route::get('/logout/dosen', [LoginUserController::class, 'logout']);
});
Route::middleware(['auth', 'role:Umum'])->group(function () {
    Route::get('/umum/dashboard', [UmumController::class, 'index']);

    Route::get('/umum/paten', [UmumController::class, 'paten']);
    Route::get('/umum/pengajuan/paten', [UmumController::class, 'pengajuanPaten']);
    Route::post('/umum/pengajuan/paten/simpan', [UmumController::class, 'simpanPaten'])->name('simpan.umum.paten');
    Route::get('/umum/paten/lihat/{id}', [UmumController::class, 'lihatPaten'])->name('umum.paten.lihat');
    Route::get('/umum/paten/edit/{id}', [UmumController::class, 'editPaten'])->name('umum.paten.edit');
    Route::post('/umum/paten/update/simpan/{id}', [UmumController::class, 'updatepaten'])->name('umum.paten.update');
    Route::get('/umum/paten/hapus/{id}', [UmumController::class, 'hapusPaten'])->name('umum.paten.hapus');
    Route::get('umum/paten/cari', [UmumController::class, 'cariPaten'])->name('paten.cari');
    Route::get('umum/hak-cipta/cari', [UmumController::class, 'cariHc']);
    Route::get('umum/desain-industri/cari', [UmumController::class, 'cariDi']);

    Route::get('/umum/hak-cipta', [UmumController::class, 'hakCipta']);
    Route::get('/umum/hak-cipta/lihat/{id}', [UmumController::class, 'lihatHc'])->name('umum.hc.lihat');
    Route::get('/umum/hak-cipta/edit/{id}', [UmumController::class, 'editHc'])->name('umum.hc.edit');
    Route::get('/umum/hak-cipta/pengajuan', [UmumController::class, 'pengajuanHc']);
    Route::post('/umum/pengajuan/hak-cipta/simpan', [UmumController::class, 'simpanHc'])->name('simpan.umum.hc');
    Route::post('/umum/hak-cipta/update/simpan/{id}', [UmumController::class, 'updateHc'])->name('umum.hc.update');
    Route::get('/umum/hak-cipta/hapus/{id}', [UmumController::class, 'hapusHc'])->name('umum.hc.hapus');

    Route::get('/umum/desain-industri', [UmumController::class, 'desainIndustri']);
    Route::get('/umum/desain-industri/pengajuan', [UmumController::class, 'pengajuanDi']);
    Route::post('/umum/desain-industri/pengajuan/simpan', [UmumController::class, 'simpanDi'])->name('simpan.umum.di');
    Route::get('/umum/desain-industri/lihat/{id}', [UmumController::class, 'lihatDi'])->name('umum.di.lihat');
    Route::get('/umum/desain-industri/edit/{id}', [UmumController::class, 'editDi'])->name('umum.di.edit');
    Route::post('/umum/desain-industri/update/simpan/{id}', [UmumController::class, 'updateDi'])->name('umum.di.update');
    Route::get('/umum/desain-industri/hapus/{id}', [UmumController::class, 'hapusDi'])->name('umum.di.hapus');

    Route::get('/umum/user/lihat', [UmumController::class, 'lihatProfil'])->name('umum.profil.lihat');
    Route::get('/umum/user/edit/{id}', [UmumController::class, 'editProfil'])->name('umum.profil.edit');
    Route::post('/umum/profili/update/simpan/{id}', [UmumController::class, 'updateProfil'])->name('umum.profil.update');

    Route::get('/logout/umum/', [LoginUserController::class, 'logout'])->name('logout.umum');
});

Route::get('/login/checker', [CheckerController::class, 'loginChecker']);
Route::post('/login/checker/autentikasi', [CheckerController::class, 'autentikasi'])->name('autentikasi.checker');
Route::middleware(['auth', 'role:Checker'])->group(function () {
    Route::get('/checker/dashboard', [CheckerController::class, 'dashboard']);
    Route::get('/checker/logout', [CheckerController::class, 'logout']);
});


Route::get("/forget-password", [ForgetPasswordManager::class, "forgetPassword"])
    ->name("forget.password");
Route::post("/forget-password", [ForgetPasswordManager::class, "forgetPasswordPost"])
    ->name("forget.password.post");
Route::get("/reset-password/{token}", [ForgetPasswordManager::class, "resetPassword"])
    ->name("reset.password");
Route::post("/reset-password", [ForgetPasswordManager::class, "resetPasswordPost"])
    ->name("reset.password.post");
