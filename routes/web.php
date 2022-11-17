<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CCLController;
use App\Http\Controllers\NCLController;
use App\Http\Controllers\RGLController;
use App\Http\Controllers\TISWLController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/admin',[DashboardController::class,'dashboard'])->name('admin.dashboard');

//creative collections limited
Route::prefix('ccl')->group(function () {

Route::get('/',[CCLController::class,'index'])->name('ccl.index');
Route::get('/defect-rate/third_party',[CCLController::class,'third_party'])->name('ccl.defect_rate.third_party');
Route::get('/defect-rate/da',[CCLController::class,'da'])->name('ccl.defect_rate.da');
Route::get('/top-defect',[CCLController::class,'top_defect'])->name('ccl.top-defect');
Route::get('/defect-pass_rate',[CCLController::class,'defect_pass_rate'])->name('ccl.defect_pass_rate');
Route::get('/defect-fail_rate',[CCLController::class,'defect_fail_rate'])->name('ccl.defect_fail_rate');
Route::get('/audit_pass',[CCLController::class,'audit_pass'])->name('ccl.audit_pass');
Route::get('/recheck_count',[CCLController::class,'recheck_count'])->name('ccl.recheck_count');

});

//next collections limited
Route::prefix('ncl')->group(function () {

Route::get('/',[NCLController::class,'index'])->name('ncl.index');
Route::get('/defect-rate/third_party',[NCLController::class,'third_party'])->name('ncl.defect_rate.third_party');
Route::get('/defect-rate/da',[NCLController::class,'da'])->name('ncl.defect_rate.da');
Route::get('/top-defect',[NCLController::class,'top_defect'])->name('ncl.top-defect');
Route::get('/defect-pass_rate',[NCLController::class,'defect_pass_rate'])->name('ncl.defect_pass_rate');
Route::get('/defect-fail_rate',[NCLController::class,'defect-fail_rate'])->name('ncl.defect-fail_rate');
Route::get('/audit_pass',[NCLController::class,'audit_pass'])->name('ncl.audit_pass');
Route::get('/recheck_count',[NCLController::class,'recheck_count'])->name('ncl.recheck_count');

});

//that's it sportswear limited
Route::prefix('tiswl')->group(function () {

Route::get('/',[TISWLController::class,'index'])->name('tiswl.index');
Route::get('/defect-rate/third_party',[TISWLController::class,'third_party'])->name('tiswl.defect_rate.third_party');
Route::get('/defect-rate/da',[TISWLController::class,'da'])->name('tiswl.defect_rate.da');
Route::get('/top-defect',[TISWLController::class,'top_defect'])->name('tiswl.top-defect');
Route::get('/defect-pass_rate',[TISWLController::class,'defect_pass_rate'])->name('tiswl.defect_pass_rate');
Route::get('/defect-fail_rate',[TISWLController::class,'defect_fail_rate'])->name('tiswl.defect_fail_rate');
Route::get('/audit_pass',[TISWLController::class,'audit_pass'])->name('tiswl.audit_pass');
Route::get('/recheck_count',[TISWLController::class,'recheck_count'])->name('tiswl.recheck_count');

});

//RGL-03
Route::prefix('rgl')->group(function () {

Route::get('/',[RGLController::class,'index'])->name('rgl.index');
Route::get('/defect-rate/third_party',[RGLController::class,'third_party'])->name('rgl.defect_rate.third_party');
Route::get('/defect-rate/da',[RGLController::class,'da'])->name('rgl.defect_rate.da');
Route::get('/top-defect',[RGLController::class,'top_defect'])->name('rgl.top-defect');
Route::get('/defect-pass_rate',[RGLController::class,'defect_pass_rate'])->name('rgl.defect_pass_rate');
Route::get('/defect-fail_rate',[RGLController::class,'defect_fail_rate'])->name('rgl.defect_fail_rate');
Route::get('/audit_pass',[RGLController::class,'audit_passe'])->name('rgl.audit_pass');
Route::get('/recheck_count',[RGLController::class,'recheck_count'])->name('rgl.recheck_count');

});
