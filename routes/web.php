<?php

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


use App\Http\Controllers\SubmissionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Unit\PendaftaranController;

// Login route
Route::get('/', function () {
    return view('welcome');
});

// Dashboard routes untuk masing-masing role
Route::group(['middleware' => 'auth'], function () {
    Route::get('superadmin/home', function () {
        return view('superadmin/home');
    })->name('superadmin.home');

    Route::get('/unit/home2', function () {
        return view('unit/home2');
    })->name('unit.home2');

    Route::get('/viewer/home3', function () {
        return view('viewer/home3');
    })->name('viewer.home3');

});

// routes superadmin page (pendaftaran, proposal and approval)
Route::get('/superadmin/pendaftaran', function () {
    return view('superadmin.pendaftaran');
})->name('superadmin.pendaftaran');
Route::get('/superadmin/daftarImprovementSA', function () {
    return view('superadmin.daftarImprovementSA');
})->name('superadmin.daftarImprovementSA');
Route::get('/superadmin/arsip', function () {
    return view('superadmin.arsip');
})->name('superadmin.arsip');

// routes unit page (pendaftaran, risalah and approval)
Route::get('/unit/daftarImprovement', function () {
    return view('unit.daftarImprovement');
})->name('unit.daftarImprovement');
Route::get('/unit/pendaftaran2', function () {
    return view('unit.pendaftaran2');
})->name('unit.pendaftaran2');
Route::get('/unit/timetable', function () {
    return view('unit.timetable');
})->name('unit.timetable');
Route::get('/unit/qcdsmpe', function () {
    return view('unit.qcdsmpe');
})->name('unit.qcdsmpe');
Route::get('/unit/arsip2', function () {
    return view('unit.arsip2');
})->name('unit.arsip2');
Route::get('/unit/arsipfoto2', function () {
    return view('unit.arsipfoto2');
})->name('unit.arsipfoto2');


// routes viewer page (pendaftaran, proposal and penilaian)
Route::get('/viewer/pendaftaran3', function () {
    return view('viewer.pendaftaran3');
})->name('viewer.pendaftaran3');
Route::get('/viewer/risalah3', function () {
    return view('viewer.risalah3');
})->name('viewer.risalah3');
Route::get('/viewer/approval3', function () {
    return view('viewer.approval3');
})->name('viewer.approval3');

// routes sysadmin page (Management User)
Route::get('/sysadmin/home4', function () {
    return view('sysadmin.home4');
})->name('sysadmin.home4');
Route::get('/sysadmin/ManagementUser', function () {
    return view('sysadmin.ManagementUser');
})->name('sysadmin.ManagementUser');
Route::get('/sysadmin/perusahaan', function () {
    return view('sysadmin.perusahaan');
})->name('sysadmin.perusahaan');
Route::get('/sysadmin/user', function () {
    return view('sysadmin.user');
})->name('sysadmin.user');



// routes/web.php
Route::get('/superadmin/home', 'SuperadminController@home')->name('superadmin.home');
Route::get('/unit/home2', 'UnitController@home2')->name('unit.home2');
Route::get('/viewer/home3', 'ViewerController@home3')->name('viewer.home3');

Route::get('/logout', 'PageController@logout');

// submission form approval
Route::get('/form-approval', [SubmissionController::class, 'showForm'])->name('form.approval');
Route::post('/form-approval', [SubmissionController::class, 'submitForm'])->name('form.submit');
Route::get('/unit/approval2', [SubmissionController::class, 'showApproval'])->name('approval.show');

//Pendaftaran
// Route::get('/pendaftaran2', [PendaftaranController::class, 'create'])->name('pendaftaran.create');
// Route::post('/pendaftaran2', [PendaftaranController::class, 'store'])->name('pendaftaran.store');


// Route::prefix('unit/pendaftaran2')->name('pendaftaran2.')->group(function() {
//     Route::get('/', [PendaftaranController::class, 'create'])->name('create');
//     Route::post('store', [PendaftaranController::class, 'store'])->name('store');
// });

// Authentication routes
Auth::routes();

