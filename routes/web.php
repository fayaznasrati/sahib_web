<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\TopMenuController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SubmenuController;
use App\Http\Controllers\UserViewController;
use App\Http\Controllers\SubscribersController;
use App\Http\Controllers\TearmAndCondationController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SellerBrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShortVideoController;
use App\Http\Controllers\ServiceNameController;
use App\Http\Controllers\ServiceBrandController;
/*
|--------------------------------------------------------------------------
| Web Routes  
|--------------------------------------------------------------------------
|ShortVideoController
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/wishlist/add', [App\Http\Controllers\UserViewController::class, 'wishlistAdd'])->name('wishlist.add');
Route::post('/wishlist/remove', [App\Http\Controllers\UserViewController::class,'removeFromWishlist'])->name('wishlist.remove');
Route::get('/my-wishlist', [App\Http\Controllers\UserViewController::class,'myWishlist'])->name('my-wishlist');
Route::get('/my-shopping-cart', [App\Http\Controllers\UserViewController::class,'myShoppingCart'])->name('my-shopping-cart');

// Route::prefix('admin')->group(function () {
//     Route::get('/test', function () {
//         return "admin test";
//     });
// });
// Route::get('/home', [App\Http\Controllers\UserViewController::class, 'index'])->name('home')->middleware('2fa');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/verify-account', [App\Http\Controllers\HomeController::class, 'verifyaccount'])->name('verifyAccount');
Route::post('/verifyotp', [App\Http\Controllers\HomeController::class, 'useractivation'])->name('verifyotp');
Route::get('/resend', [App\Http\Controllers\HomeController::class, 'resend'])->name('resend');
  

Route::prefix('user')->middleware('auth_activated_and_seller')->group(function () {
 

    // Route::resource('crud', CRUDController::class);
    Route::resource('post', PostsController::class);
    // route::get('/dashboard', function(){
    // dd('djad');
    // });

    Route::get('/seller/brand/product/{id}/edit', [App\Http\Controllers\PostsController::class, 'edit'])->name('edit-products');
    Route::get('/seller/brand/product/{id}', [App\Http\Controllers\PostsController::class, 'show'])->name('show-products');
    Route::delete('/seller/brand/product/{id}', [App\Http\Controllers\PostsController::class, 'destroy'])->name('destroy-products');
    Route::get('/seller/brand/products', [App\Http\Controllers\PostsController::class, 'index'])->name('seller-products');
    Route::get('/seller/create/brand/products', [App\Http\Controllers\PostsController::class, 'create'])->name('seller-create-products');
    Route::get('/seller/brand-dashboard', [App\Http\Controllers\SellerBrandController::class, 'brandDashboard'])->name('brand-dashboard');
    Route::post('/seller/create-brand', [App\Http\Controllers\SellerBrandController::class, 'createBrand'])->name('create-brand');
    Route::put('/seller/update-brand-profile/{id}', [App\Http\Controllers\SellerBrandController::class, 'updateBrand'])->name('update-brand');


  Route::get('/service-brand-dashboard', [App\Http\Controllers\ServiceBrandController::class, 'serviceBrandDashboard'])->name('service-brand-dashboard');
    
  
  // Route::get('/crud2/{id}/edit', 'App\Http\Controllers\CRUDController@edit2');
    // Route::put('/crud2/{id}', 'App\Http\Controllers\CRUDController@update2')->name('crud.update2');
    // Route::get('/all', 'App\Http\Controllers\CRUDController@all');
    // Route::post('/create', 'App\Http\Controllers\CRUDController@submit')->name('crud.submit');
});



// ==========================Public Routes=================================
Route::resource('/short', ShortVideoController::class );
Route::post('/like', [App\Http\Controllers\ShortVideoController::class, 'likeVideoShort'])->name('like-video');
Route::get('/short1',  [App\Http\Controllers\ShortVideoController::class, 'short'])->name('short');
Route::get('/redirect-to-previous', [App\Http\Controllers\UserViewController::class, 'redirectToPreviousPage'])->name('redirect-to-previous');
Route::get('/test', [App\Http\Controllers\UserViewController::class, 'test'])->name('test');
Route::get('/all-categories', [App\Http\Controllers\UserViewController::class, 'allCategories'])->name('all-categories');
Route::get('/', [App\Http\Controllers\UserViewController::class, 'index'])->name('index');
Route::get('/get-sub-category', [App\Http\Controllers\CategoryController::class,'getSubCategory']);
Route::delete('/deletecover/{id}', [App\Http\Controllers\PostsController::class, 'deletecover']);
Route::delete('/deleteimage/{id}', [App\Http\Controllers\PostsController::class, 'deleteimage']);
Route::POST('/update-post-status', [App\Http\Controllers\CRUDController::class, 'updateStatus']);
// Route::get('/register/seller', [App\Http\Controllers\UserViewController::class, 'getRegisterSeller'])->name('register');
// Route::post('/register/seller', [App\Http\Controllers\UserViewController::class, 'registerSeller'])->name('register-seller');
// Route::get('/ask-to-register', [App\Http\Controllers\UserViewController::class, 'askToRagisterPage'])->name('ask-to-register');
Route::get('/user/dashboard', [App\Http\Controllers\UserViewController::class, 'userDashboard'])->name('user-dashboard');
Route::get('/user/seller/dashboard', [App\Http\Controllers\UserViewController::class, 'sellerDashboard'])->name('seller-dashboard');
Route::put('/user/update-my-profile/{id}', [App\Http\Controllers\UserViewController::class, 'updateMyProfile'])->name('update-my-profile');
Route::delete('/user/delete-my-account/{id}', [App\Http\Controllers\UserViewController::class, 'deleteMyAccount'])->name('delete-my-account');
Route::get('/category-list', [App\Http\Controllers\UserViewController::class, 'categoryList'])->name('category-list');
Route::get('/single-product', [App\Http\Controllers\UserViewController::class, 'singleProduct'])->name('single-product');
Route::get('/show-all-subcategory-posts/{menu}/{slug}', [App\Http\Controllers\UserViewController::class, 'showAllSubCategoryPosts'])->name('show-all-subcategory-posts');
Route::get('/show-all-category-posts/{menu}/{slug}', [App\Http\Controllers\UserViewController::class, 'showAllCategoryPosts'])->name('show-all-category-posts');
// Route::get('/show-single-post/{id}', [App\Http\Controllers\UserViewController::class, 'showSinglePost'])->name('show-single-post');
Route::get('/show-single-post/{subMenu}/{slug}', [App\Http\Controllers\UserViewController::class, 'showSinglePost'])->name('show-single-post');
Route::get('/goback', [App\Http\Controllers\UserViewController::class, 'goBack'])->name('goback');
Route::get('/search', [App\Http\Controllers\UserViewController::class, 'search'])->name('search');
Route::get('/search-ajax', [App\Http\Controllers\UserViewController::class, 'searchAjax'])->name('search-ajax');
Route::get('seller/comapany-info/{slug}', [App\Http\Controllers\UserViewController::class, 'sellerBrandInfo'])->name('seller-brand-info');
Route::get('service/brand-info/{slug}', [App\Http\Controllers\UserViewController::class, 'serviceBrandInfo'])->name('service-brand-info');
Route::get('/show-service-single-pro/{brand}/{service}/{slug}', [App\Http\Controllers\UserViewController::class, 'showServiceSinglePro'])->name('show-service-single-pro');

// routes/web.php

Route::get('/fetch-data/{category}',  [App\Http\Controllers\UserViewController::class, 'fetchDataByCategory'])->name('fetch-data');
Route::get('/fetch-hotel-data/{category}',  [App\Http\Controllers\UserViewController::class, 'fetchHotelDataByCategory'])->name('fetch-hotel-data');
Route::get('/fetch-more-data/{category}', [App\Http\Controllers\UserViewController::class, 'fetchMoreData'])->name('fetch-more-data');

Route::get('/code', function () {
    dd(Hash::make(1234567890));
});

Auth::routes();

// Route::get('/myservice', function(){
//   return "this is service test";
// });
// ===============================this is the admin panle routes==========================================================================
Route::prefix('admin')->middleware('is_admin')->group(function () {
  Route::resource('services', ServiceNameController::class );

  // Route::resource('services-brand', ServiceBrandController::class ); //service-brand-food-menu-edit
  Route::get('services-brand', [App\Http\Controllers\ServiceBrandController::class, 'services_manager'])->name('services-manger');
  Route::get('/service-brand-show/{id}', [App\Http\Controllers\ServiceBrandController::class, 'adminServiceBrandShow'])->name('service-brand-show');
  Route::post('/service-brand-store', [App\Http\Controllers\ServiceBrandController::class, 'adminServiceBrandStore'])->name('service-brand-store');
  Route::POST('/service-brand-status', [App\Http\Controllers\ServiceBrandController::class, 'serviceBrandStatus'])->name('service-brand-status');
  Route::post('/filter-service-brands', [App\Http\Controllers\ServiceBrandController::class, 'filerServiceBrand'])->name('filter-service-brands');

  Route::post('/service-brand-food-menu-store', [App\Http\Controllers\ServiceBrandController::class, 'adminServiceBrandFoodMenuStore'])->name('service-brand-food-menu-store');
  Route::get('/service-brand-food-menu-show/{id}', [App\Http\Controllers\ServiceBrandController::class, 'adminServiceBrandFoodMenuShow'])->name('service-brand-food-menu-show');
  Route::get('/service-brand-food-menu-edit/{id}', [App\Http\Controllers\ServiceBrandController::class, 'adminServiceBrandFoodMenuEdit'])->name('service-brand-food-menu-edit');
  Route::put('/service-brand-food-menu-update/{id}', [App\Http\Controllers\ServiceBrandController::class, 'adminServiceBrandFoodMenuUpdate'])->name('service-brand-food-menu-update');
  Route::delete('/service-brand-food-menu-delete/{id}', [App\Http\Controllers\ServiceBrandController::class, 'adminServiceBrandFoodMenuDelete'])->name('service-brand-food-menu-delete');
  Route::delete('/service-brand-food-menu-image-delete/{id}', [App\Http\Controllers\ServiceBrandController::class, 'adminServiceBrandFoodMenuImageDelete'])->name('service-brand-food-menu-image-delete');
  Route::delete('/service-brand-food-menu-cover-delete/{id}', [App\Http\Controllers\ServiceBrandController::class, 'adminServiceBrandFoodMenuCoverDelete'])->name('service-brand-food-menu-cover-delete');
  
  Route::post('/service-brand-hotel-store', [App\Http\Controllers\ServiceBrandController::class, 'adminServiceBrandHotelStore'])->name('service-brand-hotel-store');
  Route::get('/service-brand-hotel-show/{id}', [App\Http\Controllers\ServiceBrandController::class, 'adminServiceBrandHotelShow'])->name('service-brand-hotel-show');
  Route::get('/service-brand-hotel-edit/{id}', [App\Http\Controllers\ServiceBrandController::class, 'adminServiceBrandHotelEdit'])->name('service-brand-hotel-edit');
  Route::put('/service-brand-hotel-update/{id}', [App\Http\Controllers\ServiceBrandController::class, 'adminServiceBrandHotelUpdate'])->name('service-brand-hotel-update');
  Route::delete('/service-brand-hotel-delete/{id}', [App\Http\Controllers\ServiceBrandController::class, 'adminServiceBrandHotelDelete'])->name('service-brand-hotel-delete');
  Route::delete('/service-brand-hotel-image-delete/{id}', [App\Http\Controllers\ServiceBrandController::class, 'adminServiceBrandHotelImageDelete'])->name('service-brand-hotel-image-delete');
  Route::delete('/service-brand-hotel-cover-delete/{id}', [App\Http\Controllers\ServiceBrandController::class, 'adminServiceBrandHotelCoverDelete'])->name('service-brand-hotel-cover-delete');
 
  Route::get('/service-brand-edit/{id}', [App\Http\Controllers\ServiceBrandController::class, 'adminServiceBrandEdit'])->name('service-brand-edit');
  Route::put('/service-brand-update/{id}', [App\Http\Controllers\ServiceBrandController::class, 'adminServiceBrandUpdate'])->name('service-brand-update');
  Route::delete('/service-brand-delete-image/{id}', [App\Http\Controllers\ServiceBrandController::class, 'servceBrandDeleteImage'])->name('service-brand-delete-image');
  Route::delete('/service-brand-delete-mobile-image/{id}', [App\Http\Controllers\ServiceBrandController::class, 'servceBrandDeleteMobileImage'])->name('service-brand-delete-mobile-image');
  Route::delete('/service-brand-delete-logo/{id}', [App\Http\Controllers\ServiceBrandController::class, 'deleteBrandLogo'])->name('service-brand-delete-logo');
  Route::delete('/service-brand-delete/{id}', [App\Http\Controllers\ServiceBrandController::class, 'deleteBrand'])->name('service-brand-delete');
  Route::resource('topMenus', TopMenuController::class);
  Route::resource('menus', MenuController::class);
  Route::resource('submenus', SubmenuController::class);
  Route::resource('tearms', TearmAndCondationController::class);
  Route::resource('subscribers', SubscribersController::class);
  Route::resource('slider', SliderController::class);
  Route::POST('/admin-slid-status', [App\Http\Controllers\SliderController::class, 'adminSlidStatus'])->name('admin-slid-status');

  Route::resource('banner', BannerController::class);
  Route::POST('/admin-banner-status', [App\Http\Controllers\BannerController::class, 'adminBannerStatus'])->name('admin-banner-status');
  Route::get('/dashboard', [App\Http\Controllers\UserViewController::class, 'adminDashboard'])->name('admin.dashboard');
  Route::get('/get-subMenu', [App\Http\Controllers\MenuController::class,'getSubMenu'])->name('get-subMenu');;
  Route::get('/posts-manager', [App\Http\Controllers\PostsController::class, 'posts_manager'])->name('posts-manager');
  Route::get('/seller-posts-manager', [App\Http\Controllers\PostsController::class, 'seller_posts_manager'])->name('seler-posts-manager');
  Route::get('/factories-posts-manager', [App\Http\Controllers\PostsController::class, 'factories_posts_manager'])->name('factories-posts-manager');
  Route::POST('/admin-post-status', [App\Http\Controllers\PostsController::class, 'adminPostStatus'])->name('admin-post-status');
  Route::Delete('/admin-post-delete/{id}', [App\Http\Controllers\PostsController::class, 'destroy'])->name('admin-post-delete');
  Route::get('/admin-post-create', [App\Http\Controllers\PostsController::class, 'adminPostCreate'])->name('admin-post-create');
  Route::post('/admin-post-store', [App\Http\Controllers\PostsController::class, 'adminPostStore'])->name('admin-post-store');
  Route::get('/admin-post-edit/{id}', [App\Http\Controllers\PostsController::class, 'adminPostEdit'])->name('admin-post-edit');
  Route::get('/admin-post-show/{id}', [App\Http\Controllers\PostsController::class, 'adminPostshow'])->name('admin-post-show');
  Route::Put('/admin-post-update/{id}', [App\Http\Controllers\PostsController::class, 'adminPostUpdate'])->name('admin-post-update');
  Route::get('/get-sub-menus', [App\Http\Controllers\PostsController::class, 'getSubMenus'])->name('get-sub-menus');

  // =================================USER Manager=========================================
  Route::get('/users-manager', [App\Http\Controllers\UserManagerController::class, 'usersManager'])->name('users-manager');
  Route::get('/users-manager-sellers', [App\Http\Controllers\UserManagerController::class, 'usersManagerSellers'])->name('users-manager-sellers');
  Route::get('/users-manager-buyer', [App\Http\Controllers\UserManagerController::class, 'usersManagerBuyer'])->name('users-manager-buyer');
  Route::get('/admin-user-show/{id}', [App\Http\Controllers\UserManagerController::class, 'userShow'])->name('admin-user-show');
  Route::delete('/admin-user-delete/{id}', [App\Http\Controllers\UserManagerController::class, 'destroy'])->name('admin-user-delete');
  Route::get('/admin-user-edit/{id}', [App\Http\Controllers\UserManagerController::class, 'userEdit'])->name('admin-user-edit');
  Route::put('/admin-update-user-profile/{id}', [App\Http\Controllers\UserManagerController::class, 'updateUserProfile'])->name('update-user-profile');
  Route::POST('/admin-user-status', [App\Http\Controllers\UserManagerController::class, 'adminUserStatus'])->name('admin-user-status');
  Route::POST('/admin-brand-status', [App\Http\Controllers\UserManagerController::class, 'adminBrandStatus'])->name('admin-brand-status');
  Route::delete('/admin-delete-user-account/{id}', [App\Http\Controllers\UserManagerController::class, 'deleteUserAccount'])->name('delete-user-account');
  Route::get('/admin-user-filter', [App\Http\Controllers\UserManagerController::class, 'filterUsersManager'])->name('admin-user-filter');
  Route::get('admin/user-brand-info/{slug}', [App\Http\Controllers\UserManagerController::class, 'userBrandInfo'])->name('user-brand-info');



});

$controller_path = 'App\Http\Controllers';

// Main Page Route
// Route::get('/admin/dashboard', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');
// Route::get('/admin/dashboard', $controller_path . '\dashboard\Analytics@index')->name('admin.dashboard');

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


