<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('container',function($view)
        {
            $loai_sp = table::all();

            $view->with('loai_sp',$loai_sp);
        });

        view()->composer(['container','container.ShoppingCart'],function($view)
        {
            if(Session('table'))
            {
                $oldCart = Session::get('shoppingcart');
                $cart = new shoppingcart('$oldCart');
                $view->with(['cart'=>Session::get('cart'),'laptop_cart'=>$cart->items,'tongtien'=>$cart->tongtien,'sluong'=>$cart->sluong]);
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
