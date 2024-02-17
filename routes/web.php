<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Admin\AchievementController;
use  App\Http\Controllers\Admin\CategoryController;
use  App\Http\Controllers\Admin\ContactController;
use  App\Http\Controllers\Admin\UserController;
use  App\Http\Controllers\Admin\DashboardController;
use  App\Http\Controllers\Admin\RoleController;

use App\Http\Controllers\Site\CompanyController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ContactController as MessageController;
use App\Http\Controllers\Site\ExpartiseController;
use App\Http\Controllers\Site\PerformanceController;
use App\Http\Controllers\Site\ErrorPageController;

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

//AUTH ROUTES
Route::prefix('adminhub/')->group(function() {
    Auth::routes();
});

/*
|--------------------------------------------------------------------------
|   PMPHUB WEBSITE ROUTES
|--------------------------------------------------------------------------
*/
Route::prefix('/')->group(function ()
{
   //HOME
   Route::get('', [HomeController::class, 'index'])->name('home.index');

   //COMPANY
   Route::get('about', [CompanyController::class, 'about'])->name('company.about');
   Route::get('management', [CompanyController::class, 'management'])->name('company.management');

   //CONTACT
   Route::get('contact', [MessageController::class, 'create'])->name('message.create');
   Route::post('contact', [MessageController::class, 'store'])->name('message.store');

   //PERFORMANCE
   Route::get('performance', [PerformanceController::class, 'achievs'])->name('performance.achievs');
   Route::get('show-performance/{id}', [PerformanceController::class, 'show'])->name('performance.show');

   //EXPARTIES
   Route::get('agency', [ExpartiseController::class, 'agency'])->name('expartise.agency');
   Route::get('capacity-building', [ExpartiseController::class, 'capacityBuilding'])->name('expartise.capacity_building');
   Route::get('dbms', [ExpartiseController::class, 'dbms'])->name('expartise.dbms');
   Route::get('future-projects', [ExpartiseController::class, 'futureProjects'])->name('expartise.future_projects');
   Route::get('monitoring-evaluation', [ExpartiseController::class, 'monitoring'])->name('expartise.monitoring');
   Route::get('project-management', [ExpartiseController::class, 'projmgt'])->name('expartise.project_mgt');
   Route::get('research-evaluation', [ExpartiseController::class, 'projmgt'])->name('expartise.research');

   //ERROR PAGE
   Route::get('404', [ErrorPageController::class, 'error404'])->name('error.404');
});

/*
|--------------------------------------------------------------------------
|   PMPHUB ADMINISTRATION PANEL ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/adminhub', [DashboardController::class, 'index'])->name('admin.index');
Route::middleware(['auth'])->prefix('adminhub/')->group(function ()
{
      //USER
      Route::resource('users', UserController::class);
      //ROLE
      Route::resource('roles', RoleController::class);
      //ACHIEVEMENT
      Route::resource('achievement', AchievementController::class);
      //CATEGORY
      Route::resource('category', CategoryController::class);
      //CONTACT
      Route::resource('contact', ContactController::class);
});
