<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Cart;




class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        view()->composer('*', function ($view) use ($request)
        {


            if ($request->is('admin*')) {
                $view->with('admin_module', config('module'));
            }
            else {
                $view->with('categoris', Category::all())
                ->with('brands', Brand::all())
                ->with('qty_cart', Cart::countCart());
            }
        });
    }
}
