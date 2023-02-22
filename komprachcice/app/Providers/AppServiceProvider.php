<?php

namespace App\Providers;

use App\Models\Coach;
use App\Models\Nav;
use App\Models\Section;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::share('nav', Nav::MAIN_NAV);
        View::share('coaches', Coach::COACHES);
        View::share('sections', Section::SECTIONS);
        View::share('navGroups', NAV::GROUPS);
        View::share('sectionGroups', Section::GROUPS);
    }
}
