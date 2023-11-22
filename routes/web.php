<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SubmenuController;
use App\Http\Controllers\UserViewController;
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
// Route::prefix('admin')->group(function () {
//     Route::get('/test', function () {
//         return "admin test";
//     });
// });

Route::prefix('user')->middleware('auth')->group(function () {
 

    Route::resource('crud', CRUDController::class);
    Route::resource('post', PostsController::class);


    Route::get('/crud2/{id}/edit', 'App\Http\Controllers\CRUDController@edit2');
    Route::put('/crud2/{id}', 'App\Http\Controllers\CRUDController@update2')->name('crud.update2');
    Route::get('/all', 'App\Http\Controllers\CRUDController@all');
    Route::post('/create', 'App\Http\Controllers\CRUDController@submit')->name('crud.submit');
});


// ==========================Public Routes=================================
Route::get('/get-sub-category', 'App\Http\Controllers\CategoryController@getSubCategory');
Route::delete('/deletecover/{id}', [PostsController::class, 'deletecover']);
Route::delete('/deleteimage/{id}', [PostsController::class, 'deleteimage']);
Route::POST('/update-post-status', [CRUDController::class, 'updateStatus']);

Route::get('/user-login', function () {
    return view('login');
});

Route::get('/user-register', function () {
    return view('register');
});

Route::get('/category-list', function () {
    return view('category-list');
});
Route::get('/single-product', function () {
    return view('single-product');
});


Route::get('/', [App\Http\Controllers\UserViewController::class, 'index'])->name('index');
Route::get('/user/dashboard', [App\Http\Controllers\UserViewController::class, 'userDashboard'])->name('user-dashboard');
Route::put('/user/update-my-profile/{id}', [App\Http\Controllers\UserViewController::class, 'updateMyProfile'])->name('update-my-profile');
Route::delete('/user/delete-my-account/{id}', [App\Http\Controllers\UserViewController::class, 'deleteMyAccount'])->name('delete-my-account');
// Route::POST('/update-post-status', [CRUDController::class, 'updateStatus']);
// Route::get('/', [App\Http\Controllers\UserViewController::class, 'index'])->name('index');
// Route::get('/', [App\Http\Controllers\UserViewController::class, 'index'])->name('index');
// Route::get('/', [App\Http\Controllers\UserViewController::class, 'index'])->name('index');



// Route::fallback(function () {
//     return redirect('/');
// });

Auth::routes();

// ===============================this is the admin panle routes==========================================================================
Route::prefix('admin')->group(function () {

Route::resource('menus', MenuController::class);
Route::get('/get-subMenu', [App\Http\Controllers\MenuController::class,'getSubMenu'])->name('get-subMenu');;

Route::resource('submenus', SubmenuController::class);
Route::get('/posts-manager', [App\Http\Controllers\PostsController::class, 'posts_manager'])->name('posts-manager');
Route::POST('/admin-post-status', [App\Http\Controllers\PostsController::class, 'adminPostStatus'])->name('admin-post-status');
Route::Delete('/admin-post-delete/{id}', [App\Http\Controllers\PostsController::class, 'destroy'])->name('admin-post-delete');
Route::get('/admin-post-edit/{id}', [App\Http\Controllers\PostsController::class, 'adminPostEdit'])->name('admin-post-edit');
Route::get('/admin-post-show/{id}', [App\Http\Controllers\PostsController::class, 'adminPostshow'])->name('admin-post-show');
Route::Put('/admin-post-update/{id}', [App\Http\Controllers\PostsController::class, 'adminPostUpdate'])->name('admin-post-update');
Route::get('/get-sub-menus', [App\Http\Controllers\PostsController::class, 'getSubMenus'])->name('get-sub-menus');



});

$controller_path = 'App\Http\Controllers';

// Main Page Route
Route::get('/admin', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');

// layout
Route::get('/layouts/without-menu', $controller_path . '\layouts\WithoutMenu@index')->name('layouts-without-menu');
Route::get('/layouts/without-navbar', $controller_path . '\layouts\WithoutNavbar@index')->name('layouts-without-navbar');
Route::get('/layouts/fluid', $controller_path . '\layouts\Fluid@index')->name('layouts-fluid');
Route::get('/layouts/container', $controller_path . '\layouts\Container@index')->name('layouts-container');
Route::get('/layouts/blank', $controller_path . '\layouts\Blank@index')->name('layouts-blank');

// pages
Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');
Route::get('/pages/account-settings-notifications', $controller_path . '\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications');
Route::get('/pages/account-settings-connections', $controller_path . '\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections');
Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');
Route::get('/pages/misc-under-maintenance', $controller_path . '\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance');

// authentication
Route::get('/auth/login-basic', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');
Route::get('/auth/forgot-password-basic', $controller_path . '\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic');

// cards
Route::get('/cards/basic', $controller_path . '\cards\CardBasic@index')->name('cards-basic');

// User Interface
Route::get('/ui/accordion', $controller_path . '\user_interface\Accordion@index')->name('ui-accordion');
Route::get('/ui/alerts', $controller_path . '\user_interface\Alerts@index')->name('ui-alerts');
Route::get('/ui/badges', $controller_path . '\user_interface\Badges@index')->name('ui-badges');
Route::get('/ui/buttons', $controller_path . '\user_interface\Buttons@index')->name('ui-buttons');
Route::get('/ui/carousel', $controller_path . '\user_interface\Carousel@index')->name('ui-carousel');
Route::get('/ui/collapse', $controller_path . '\user_interface\Collapse@index')->name('ui-collapse');
Route::get('/ui/dropdowns', $controller_path . '\user_interface\Dropdowns@index')->name('ui-dropdowns');
Route::get('/ui/footer', $controller_path . '\user_interface\Footer@index')->name('ui-footer');
Route::get('/ui/list-groups', $controller_path . '\user_interface\ListGroups@index')->name('ui-list-groups');
Route::get('/ui/modals', $controller_path . '\user_interface\Modals@index')->name('ui-modals');
Route::get('/ui/navbar', $controller_path . '\user_interface\Navbar@index')->name('ui-navbar');
Route::get('/ui/offcanvas', $controller_path . '\user_interface\Offcanvas@index')->name('ui-offcanvas');
Route::get('/ui/pagination-breadcrumbs', $controller_path . '\user_interface\PaginationBreadcrumbs@index')->name('ui-pagination-breadcrumbs');
Route::get('/ui/progress', $controller_path . '\user_interface\Progress@index')->name('ui-progress');
Route::get('/ui/spinners', $controller_path . '\user_interface\Spinners@index')->name('ui-spinners');
Route::get('/ui/tabs-pills', $controller_path . '\user_interface\TabsPills@index')->name('ui-tabs-pills');
Route::get('/ui/toasts', $controller_path . '\user_interface\Toasts@index')->name('ui-toasts');
Route::get('/ui/tooltips-popovers', $controller_path . '\user_interface\TooltipsPopovers@index')->name('ui-tooltips-popovers');
Route::get('/ui/typography', $controller_path . '\user_interface\Typography@index')->name('ui-typography');

// extended ui
Route::get('/extended/ui-perfect-scrollbar', $controller_path . '\extended_ui\PerfectScrollbar@index')->name('extended-ui-perfect-scrollbar');
Route::get('/extended/ui-text-divider', $controller_path . '\extended_ui\TextDivider@index')->name('extended-ui-text-divider');

// icons
Route::get('/icons/boxicons', $controller_path . '\icons\Boxicons@index')->name('icons-boxicons');

// form elements
Route::get('/forms/basic-inputs', $controller_path . '\form_elements\BasicInput@index')->name('forms-basic-inputs');
Route::get('/forms/input-groups', $controller_path . '\form_elements\InputGroups@index')->name('forms-input-groups');

// form layouts
Route::get('/form/layouts-vertical', $controller_path . '\form_layouts\VerticalForm@index')->name('form-layouts-vertical');
Route::get('/form/layouts-horizontal', $controller_path . '\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal');

// tables
Route::get('/tables/basic', $controller_path . '\tables\Basic@index')->name('tables-basic');


