<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\Menu;

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
  
    $wishlists = Wishlist::where('user_id',Auth::id())->get();
    $menus = Menu::orderBy('id', 'desc')->take(9)->get();
    $submenus = SubMenu::All();
    View::share('submenus', $submenus,'menus',$menus );
    View::share('menus',$menus );
    
  }
}
