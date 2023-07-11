<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as MyView;

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
        Blade::directive('newDirective', function (string $new) {
            return "<?php echo date ('Y-m-d', $new); ?>";
        });
        Blade::if('checkVal', function (string $checkVal) {
            return "100" === $checkVal;
        });

        Blade::if('checkLang', function (string $checkLang) {
            return config('app.locale') === $checkLang;
        });

        // view()->composer('*', function ($view) {
        //     $footer = model::find(1);
        //     $view->with('footer',  $footer);
        // });

        view::composer('*', function (MyView $view) {
            return $view->with(['myvar' => 'Message from Composer view']);
        });
    }
}
