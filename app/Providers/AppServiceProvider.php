<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use ConsoleTVs\Charts\Registrar as Charts;

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
    
    public function boot(Charts $charts )
    {
        Schema::defaultStringLength(191);

        $charts->register([
            \App\Charts\YTeChart::class,
            \App\Charts\GiaoDucChart::class,
            \App\Charts\KenhTruyenChart::class,
            \App\Charts\DoanhThuDichVuChart::class,
            \App\Charts\TongDoanhThuChart::class,
            \App\Charts\DuAnChart::class

        ]);
        
    }
}
