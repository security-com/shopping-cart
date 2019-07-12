<?php

namespace SecurityCom\ShoppingCart;

use Illuminate\Support\ServiceProvider;
use SecurityCom\ShoppingCart\Services\ShoppingCart;

class ShoppingCartServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('shoppingcart', function () {
            return new ShoppingCart();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
