<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SponsorsController;
use App\Http\Controllers\DaftarLombaController;
use App\Http\Controllers\ForgetPasswordManager;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TimController;
use App\Http\Controllers\PengaturanController;

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

Route::resource('/', IndexController::class, ['names' => 'index']);
Route::view('/pengumuman-kategori-web', 'layouts.layoutPengumumanWeb');
Route::view('/pengumuman-kategori-design', 'layouts.layoutPengumumanDesign');
Route::view('/pengumuman-kategori-poster', 'layouts.layoutPengumumanPoster');
Route::view('/pengumuman-kategori-video', 'layouts.layoutPengumumanVideo');
Route::resource('/data-expo', ExpoController::class);
Route::view('/pengumuman-juara', 'layouts.layoutPengumumanJuara');

Route::controller(LoginController::class)->group(function () {
    Route::get('/Login','index')->name('Login');
    Route::post('/Login','Authentic')->name('Login.auth');
    Route::post('/Logout','Logout')->name('Logout');  
    Route::get('/Logout','Logout')->name('Logout');  
});
Route::controller(RegisController::class)->group(function () {
    Route::get('/Register','index')->name('Register.page');
    Route::post('/Register','store')->name('Register.auth');
});

Route::controller(ForgetPasswordManager::class)->group(function(){
    Route::get('/ForgotPassword','index')->name('Forgot.page');
    Route::get('/ResetPassword/{token}','reset')->name('Forgot.reset');
    Route::post('/ForgotPassword','store')->name('Forgot.auth');
    Route::post('/ResetPassword','resetPass')->name('ForgotReset.post');
});
Route::middleware('auth')->group(function() {
    //dasboard controlller
    //Admin
    Route::controller(DashboardController::class)->middleware('only_admin')->group(function( ){
        Route::get('/dashboard','index')->name('admin.dashboard');
        Route::get('/TotalPeserta','peserta')->name('admin.peserta');
        Route::get('/TimWebsite','timweb')->name('admin.website');
        Route::get('/TimDesign','timdesign')->name('admin.timdesign');
        Route::get('/TimPoster','timposter')->name('admin.timposter');
        Route::get('/TimVideo','timvideo')->name('admin.timvideo');
        Route::get('/timlolos/{id_pendaftar}','lolos')->name('admin.lolos');
    });
    // Admin show tim
    Route::controller(TimController::class)->middleware('only_admin')->group(function( ){
        Route::get('/show/{id}','showtim')->name('tim.show');
        Route::get('/timshow/{id}','pesertashow')->name('tim.pesertashow');
        
        Route::get('pdf/view/{file}', 'pdfview')->name('tim.pdfview');
        Route::get('/storage/data_pendaftar/{filename}','download')->name('pdf.download');

    });
    // Admin pengaturan
    Route::controller(PengaturanController::class)->middleware('only_admin')->group(function( ){
        Route::get('/Pengaturan','index')->name('Pengaturan.index');
        Route::post('/Pengaturan','store')->name('Pengaturan.store');

    });
    


    // Peserta
    Route::get('/dashboardPeserta',[DashboardController::class,'dashboardPeserta'])->middleware('only_peserta')->name('Dashboard_peserta'); 
    Route::get('/profile',[DashboardController::class,'profile'])->middleware('only_peserta'); 

    // Profile
    Route::controller(ProfileController::class)->middleware('only_peserta')->group(function (){
        Route::get('/profile','show')->name('profile.peserta');
        Route::get('/Profile/{id}/edit','edit')->name('profile.edit');
        Route::patch('/Profile/{id}/update','update')->name('profile.update');
    });
    //daftar lomba controller
    Route::controller(DaftarLombaController::class)->middleware('only_peserta')->group(function () {
        Route::get('/MenuLomba','index')->name('Lomba.peserta.page');
        Route::get('/EditMenuLomba/{id}','edit')->name('Lomba.peserta.edit');
        Route::get('/storage/data_pendaftar/{filename}')->name('proposal.download');
        Route::post('/DaftarLomba','store')->name('Lomba.peserta.store');
        Route::delete('/DaftarLomba/{id}','destroy')->name('Lomba.peserta.destroy');
        Route::patch('/PendaftarUpdate/{id}','tambahproposal')->name('Lomba.peserta.tambahproposal');
        Route::patch('/Pendaftaruploadbuktibayar/{id}','uploadbuktibayar')->name('Lomba.peserta.uploadbuktibayar');
    });
    //daftar lomba controller
    Route::controller(PesertaController::class)->middleware('only_peserta')->group(function () {
        Route::get('/Peserta','index')->name('Peserta.index');
        Route::get('/Peserta/{id}/edit','edit')->name('Peserta.edit');
        Route::get('/Peserta/{id_tim}/create','create')->name('Peserta.create');
        Route::post('/Peserta','store')->name('Peserta.store');
        Route::delete('/Peserta/{id_user}','destroy')->name('Peserta.destroy');
        Route::get('/Peserta/{id}/show','show')->name('Peserta.show');
        Route::patch('/Peserta/{id}/update','update')->name('Peserta.update');
    });
    // Route::resource('Peserta', PesertaController::class);
    // //Pendaftar controller
    // Route::controller(PendaftarController::class)->group(function () {
    //     // Route::get('/MenuLomba','index')->name('Lomba.peserta.page');
    //     Route::patch('/PendaftarUpdate/{id}','tambahproposal')->name('Pendaftar.update');
    // });

});

