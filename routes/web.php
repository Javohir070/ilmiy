<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FoydaliModel;
use App\Http\Controllers\FoydaliModelController;
use App\Http\Controllers\GuvohnomaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IlmiyDarajaController;
use App\Http\Controllers\IlmiyUnvonController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\Insurance\Osago\OsagoController;
use App\Http\Controllers\IxtiroController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RespublikaMaqolaController;
use App\Http\Controllers\RespublikaTezisController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SubMenuController;
use App\Http\Controllers\XalqaroMaqolaController;
use App\Http\Controllers\XalqaroLoyihalarController;
use App\Http\Controllers\XalqaroTezisController;

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

Route::get('/', [SiteController::class, 'index'])->name('frontend.home');
Route::get('/about', [SiteController::class, 'about'])->name('frontend.about');
Route::get('/contact', [SiteController::class, 'contact'])->name('frontend.contact');
Route::get('/news', [SiteController::class, 'news'])->name('frontend.news');
Route::get('/team', [SiteController::class, 'team'])->name('frontend.team');
Route::get('/portfolio', [SiteController::class, 'portfolio'])->name('frontend.portfolio');
Route::get('/studies', [SiteController::class, 'studies'])->name('frontend.studies');
Route::get('/views/{id}/{page:slug}', [SiteController::class, 'views'])->name('views');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//admin panil



Route::resource('/abouts', AboutController::class);
Route::resource('/menus', MenuController::class);
Route::resource('/submenu', SubMenuController::class);
Route::resource('/xalqromaqola', XalqaroMaqolaController::class);
Route::resource('/guvohnoma', GuvohnomaController::class);
Route::resource('/sertifikat', SertifikatController::class);
Route::resource('/ixtiro', IxtiroController::class);

// ishtirok etgan loyihalar
Route::get('/davlat-ilmiy',[XalqaroLoyihalarController::class, 'davlat_ilmiy'])->name('davlat-ilmiy.index');
Route::get('/xojalik',[XalqaroLoyihalarController::class, 'xojalik'])->name('xojalik.index');
Route::get('/tijoratlashtirish',[XalqaroLoyihalarController::class, 'tijoratlashtirish'])->name('tijoratlashtirish.index');
Route::resource('/xalqaroloyihalar', XalqaroLoyihalarController::class);


Route::get('/foydalimodel', [FoydaliModelController::class, 'index'])->name('foydalimodel.index');
Route::get('/xalqaro-tezis',[XalqaroTezisController::class, 'index'])->name('xalqaro-tezis.index');
Route::get('/respublika-maqola',[RespublikaMaqolaController::class, 'index'])->name('respublika-maqola.index');
Route::get('/respublika-tezis',[RespublikaTezisController::class, 'index'])->name('respublika-tezis.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::resources([
        'product' => OsagoController::class,
        'home' => HomeController::class,
        'pages'=> PageController::class
    ]);
});
Route::group(['middleware' => ['role:super-admin|admin']], function() {

    Route::resource('permissions', PermissionController::class);
    Route::get('permissions/{permissionId}/delete', [PermissionController::class, 'destroy']);

    Route::resource('/ilmiyunvon', IlmiyUnvonController::class);
    Route::resource('/ilmiydaraja', IlmiyDarajaController::class);
    Route::resource('roles', RoleController::class);
    Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy']);
    Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);
    Route::resource('users', UserController::class);
    Route::get('users/{userId}/delete', [UserController::class, 'destroy']);

});

require __DIR__.'/auth.php';
