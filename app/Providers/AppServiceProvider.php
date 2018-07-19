<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Observers\SectionObserver;
use App\Observers\MacrozonaObserver;
use App\Macrozona;
use App\Seccion;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(120);
        \Response::macro('attachment', function ($content, $nameFile) {
            //dd($nameFile);
        $headers = [
            'Content-type'        => 'text/xml',
            'Content-Disposition' => 'attachment; filename="'.$nameFile.'.xml"',
        ];

        return \Response::make($content, 200, $headers);
        });
        
        Seccion::observe(SectionObserver::class);
        Macrozona::observe(MacrozonaObserver::class);
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
