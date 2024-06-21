<?php

use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [InscriptionController::class, 'index'])->name('preinscription');
Route::get('/confirm', [InscriptionController::class, 'confirm'])->name('preinscription.confirm'); 

Route::get('/login', [UserController::class, 'loginview'])->name('login.view'); 
Route::post('/login', [UserController::class, 'login'])->name('login.home');
Route::post('/setup', [UserController::class, 'password_setup'])->name('password.setup'); 
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/professor/dashboard', [UserController::class, 'professor_dashboard'])->name('professor.dashboard');
Route::get('/student/dashboard', [UserController::class, 'student_dashboard'])->name('student.dashboard');

Route::resource('user', UserController::class);
Route::prefix('utilisateur')->name('users.')->group(function () {
    Route::get('/create/{userType}', [UserController::class, 'create'])->name('create');

    Route::get('/profile/{id}', [UserController::class, 'getUsersById'])->name('profile');
    Route::get('/profile_setting/{id}', [UserController::class, 'setUsersById'])->name('profile_set');
    Route::post('/store',[UserController::class , 'store'])->name('store');
    Route::get('/edit/{user}',[UserController::class , 'edit'])->name('edit');
    Route::put('/{user}/update',[UserController::class , 'update'])->name('update');
    Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('destroy');
    Route::get('/roles', [UserController::class, 'getRoles'])->name('roles');
    Route::get('/roleform/{id?}', [UserController::class, 'getRoleForm'])->name('roleform');
    Route::get('/store/role', [UserController::class, 'store_role'])->name('store.role');
    Route::get('/permissions', [UserController::class, 'getPermissions'])->name('permissions');
    Route::get('/store/permission', [UserController::class, 'store_permission'])->name('store.permission');
    Route::get('/login-as/{id}', [UserController::class, 'loginAs'])->name('login-as');
    Route::get('download-company-access-infos-pdf/{companyName}', [UserController::class,'downloadCompanyAccesInfosPdf'])->name('download-company-access-infos-pdf');
});
