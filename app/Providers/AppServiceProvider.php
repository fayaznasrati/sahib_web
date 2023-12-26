<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\Menu;
use App\Models\TopMenu;
use App\Models\User;
use App\Models\SubMenu;
use App\Models\Wishlist;
class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */

  public function boot()
  {
  
    view()->composer('*', function ($view) 
    {
    if(Auth::check()){
    // $cart = Cart::where('user_id', Auth::user()->id);
    $wishlists = Wishlist::where('user_id',Auth::user()->id)->get();
    View::share('wishlists', $wishlists );
    // View::share('cart', $cart );
    }
    $topMenus = TopMenu::orderBy('id', 'desc')->limit(10)->get();
    // $menus1_4 = Menu::orderBy('id', 'desc')->limit(4)->get();
    $menus1_4 = Menu::with('submenu')->get();
    $menus4_8 = Menu::orderBy('id', 'desc')->offset(4)->limit(4)->get();
    $submenus = SubMenu::All();
    View::share('topMenus', $topMenus );
    View::share('submenus', $submenus );
    View::share('menus1_4',$menus1_4 );
    View::share('menus4_8',$menus4_8 );
  });
  }
}
