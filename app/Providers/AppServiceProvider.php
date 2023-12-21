<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;

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
        Filament::registerRenderHook(
            'head.end',
            function () {
                return '
                    <style>
                        .filament-forms-rich-editor-component p {
                            margin: 0 !important;
                        }
                        .filament-notifications-title {
                            height: auto !important;
                        }
                    </style>
                ';
            },
        );

        Filament::serving(function() {
            Filament::registerViteTheme('resources/css/app.css');
        });
    }
}
