<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Back\ProfileWebController;
use App\Http\Controllers\Back\JasaController;
use App\Http\Controllers\Back\TestimonyController;
use App\Http\Controllers\Back\TeamController;
use App\Http\Controllers\Back\RoleController;
use App\Http\Controllers\Back\PermissionController;
use App\Http\Controllers\Front\HomeController;
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


Route::resource('login', LoginController::class)->middleware('guest');
Route::resource('/', HomeController::class);


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('profile', [LoginController::class, 'profile'])->name('profile');
    Route::post('profile/update/{user}', [LoginController::class, 'profileUpdate'])->name('profile.update');
    Route::post('profile/check-profile-username', [LoginController::class, 'checkProfileUsername'])->name('checkProfileUsername');
    Route::post('profile/check-profile-email', [LoginController::class, 'checkProfileEmail'])->name('checkProfileEmail');


    Route::resource('dashboard', DashboardController::class);
    Route::resource('profile-web', ProfileWebController::class);

    Route::resource('jasa', JasaController::class);
    Route::post('jasa/destroy-all', [JasaController::class, 'destroyAll'])->name('jasa.destroyAll');
    Route::post('jasa/check-jasa-name', [JasaController::class, 'checkJasaName'])->name('checkJasaName');
    Route::post('jasas/search-jasa', [JasaController::class, 'jasaSearch'])->name('jasaSearch');
    Route::post('jasas/pagination', [JasaController::class, 'jasaPagination'])->name('jasaPagination');

    Route::resource('testimonies', TestimonyController::class);
    Route::post('testimonies/destroy-all', [TestimonyController::class, 'destroyAll'])->name('testimony.destroyAll');
    Route::post('testimonies/check-testimony-name', [TestimonyController::class, 'checkTestimonyName'])->name('checkTestimonyName');
    Route::post('testimony/search-testimony', [TestimonyController::class, 'testimonySearch'])->name('testimonySearch');
    Route::post('testimony/pagination', [TestimonyController::class, 'testimonyPagination'])->name('testimonyPagination');

    Route::resource('teams', TeamController::class);
    Route::post('teams/destroy-all', [TeamController::class, 'destroyAll'])->name('teams.destroyAll');

    Route::resource('roles', RoleController::class);
    Route::post('roles/destroy-all', [RoleController::class, 'destroyAll'])->name('roles.destroyAll');
    Route::post('roles/check-roles-name', [RoleController::class, 'checkRoleName'])->name('checkRoleName');

    Route::resource('permissions', PermissionController::class);
    Route::post('permissions/destroy-all', [PermissionController::class, 'destroyAll'])->name('permissions.destroyAll');
    Route::post('permissions/check-permission-name', [PermissionController::class, 'checkPermissionName'])->name('checkPermissionName');

});
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
