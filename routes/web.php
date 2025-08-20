<?php

use App\Http\Controllers\collectioManagerController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\leadController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\reportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



    // ----------------- auth ----------------------------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// ----------------- management ---------------------------
Route::get('management', [ManagementController::class, 'index'])->name('management');
Route::get('/create-profile', [ManagementController::class, 'create'])->name('create-profile');

Route::post('/addProfiles', [ManagementController::class, 'store'])->name('addProfiles');
Route::post('/updateProfile', [ManagementController::class, 'updateManagement'])->name('updateProfile');

Route::get('/management-list', [ManagementController::class, 'managementList'])->name('management-list');

// Route::get('management-detail', [ManagementController::class, 'managementDetail'])->name('management-detail');
Route::get('/management-detail/{id}', [ManagementController::class, 'managementDetail'])->name('management-detail');
Route::get('/ivr-status', [ManagementController::class, 'ivrStatus'])->name('ivr-status');
Route::get('/ivrstatus-data', [ManagementController::class, 'ivrStatusData'])->name('ivrstatus-data');
Route::get('blacklist-customer', [ManagementController::class, 'blackList'])->name('blacklist-customer');
Route::get('login-log', [ManagementController::class, 'loginLog'])->name('login-log');
Route::get('blacklist-data', [ManagementController::class, 'blacklistData'])->name('blacklist-data');
Route::get('add-blacklist', [ManagementController::class, 'addBlackList'])->name('add-blacklist');
Route::post('/create-blacklist', [ManagementController::class, 'createBlackList'])->name('create-blacklist');
Route::post('add-blacklist', [ManagementController::class, 'addBlackList'])->name('add-blacklist');
Route::get('edit-ivrstatus/{id}', [ManagementController::class, 'editIvrstatus'])->name('edit-ivrstatus');
Route::post('/update-ivrstatus', [ManagementController::class, 'updateIvrstatus'])->name('update-ivrstatus');
Route::get('/loginslogs-data', [ManagementController::class, 'loginlogsData'])->name('loginslogs-data');



// ---------------------- customer -----------------------------------


Route::get('/customer-list', [customerController::class, 'index'])->name('customer-list');
Route::get('/customer-data', [CustomerController::class, 'customerData'])->name('customer-data');
Route::get('/customer-edit/{id}', [CustomerController::class, 'customerEdit'])->name('customer-edit');
Route::post('/customer-update', [CustomerController::class, 'customerUpdate'])->name('customer-update');



Route::get('payday-collection-pending2', [collectioManagerController::class, 'payDay2'])->name('payday-collection-pending2');
Route::get('payday-collection-pending', [collectioManagerController::class, 'payDay'])->name('payday-collection-pending');
Route::get('payday-collection-hold', [collectioManagerController::class, 'payDayHold'])->name('payday-collection-hold');


Route::get('report-list', [reportController::class, 'report'])->name('report-list');


// ------------------------ lead --------------------------------------------

Route::get('lead-type', [leadController::class, 'leadType'])->name('lead-type');
Route::get('lead-view', [leadController::class, 'leadView'])->name('lead-view');
Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
Route::get('/lead-view-credit', [LeadController::class, 'leadViewCredit'])->name('lead-view-credit');

require __DIR__ . '/auth.php';
