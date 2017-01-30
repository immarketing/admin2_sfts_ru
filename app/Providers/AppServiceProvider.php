<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
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
        $dropDownDict = array (
            array ("href"=>"#about", "text"=>"Группы"),
            array ("href"=>"#courses", "text"=>"Студенты"),
            array ("href"=>"#contacts", "text"=>"Тесты"),
        );
        $dropDownAct = array (
            array ("href"=>"#about", "text"=>"Действие 1"),
            array ("href"=>"#courses", "text"=>"Действие 2"),
        );
        $dropDownReps = array (
            array ("href"=>"#about", "text"=>"Пока отчетов нетути :("),
            array ("href"=>"#courses", "text"=>"Пока отчетов нетути :("),
        );
        $topMenu = array (
            array ("href"=>"#worksteps", "text"=>"Справочники", "dropdown" => $dropDownDict),
            array ("href"=>"#worksteps", "text"=>"Действия", "dropdown" => $dropDownAct),
            array ("href"=>"#contacts", "text"=>"Отчеты", "dropdown" => $dropDownReps)
            );
        //
        View::share('topMenu', $topMenu);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
        if ($this->app->environment() == 'local') {
            $this->app->register('Iber\Generator\ModelGeneratorProvider');
        }
        // in experiment

    }
}
