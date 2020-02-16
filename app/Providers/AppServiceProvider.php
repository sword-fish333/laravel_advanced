<?php

namespace App\Providers;

use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\Channel;
use App\Http\View\Composers\ChannelsComposers;
use Illuminate\Support\ServiceProvider;
use \View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGatewayContract::class, function(){
            if(request()->has('credit')){
                return new CreditPaymentGateway('euro');
            }else{
                return new BankPaymentGateway('euro');

            }
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        View::share('channels',Channel::orderBy('name')->get());

        //granular views with wildcard
//    View::composer(['posts.*','channels.index'],function($view){
//        $view->with('channels',Channel::orderBy('name')->get());
//    });

        View::composer('partials.*',ChannelsComposers::class);
    }
}
