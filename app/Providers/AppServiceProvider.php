<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
