<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\FooterSetting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();

        View::composer('admin.layouts.app', function ($view) {
            $uncheckedContactsCount = Contact::query()->where('checked', false)->count();
            $view->with('uncheckedContactsCount', $uncheckedContactsCount);
        });

        View::composer('borna.layouts.app', function ($view) {
            $footerSetting = FooterSetting::firstOrCreate([]);
            $view->with('footerSetting', $footerSetting);
        });

        Schema::defaultStringLength(191);
    }
}
