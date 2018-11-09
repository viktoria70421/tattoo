<?php

namespace App\Providers;
use App\Order;
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
        Order::created(function ($obj){
			//$obj-.name;
			
			$email = 'adminemail@site.by';
			$thema = 'Уважаемый '. $obj->name . ', вам сообщение с сайта site.ru';
			$body = '<h1>Ваш заказ принят</h1>';
			$headers = "MIME-Version: 1/0\r\n";
			$headers.= "From: admin@tut.by\r\n";
			$headers.="Content-Type: text/plain; charset=utf-8\r\n";
			$headers.="X-Mailler:PHP/" . phpversion();
			
			@mail ($email, $thema, $body, $headers);
			
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
