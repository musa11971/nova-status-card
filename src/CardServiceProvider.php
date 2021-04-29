<?php

namespace musa11971\NovaStatusCard;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class CardServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-status-card', __DIR__.'/../dist/js/card.js');
            Nova::style('nova-status-card', __DIR__.'/../dist/css/card.css');
        });
    }
}
