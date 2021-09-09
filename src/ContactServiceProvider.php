<?php

namespace Webeasy\Contact;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class ContactServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom(__DIR__. '/routes/web.php');
        $this->loadViewsFrom(__DIR__. '/views', 'contact');
        $this->loadMigrationsFrom(__DIR__. '/database/migrations');
        $this->mergeConfigFrom(__DIR__. '/config/contact.php', 'contact');
        $this->publishes([
            __DIR__. '/config/contact.php' => config_path('contact.php'),
        ]);
        Schema::defaultStringLength(191);
    }

    public function register(){
        
    }

}