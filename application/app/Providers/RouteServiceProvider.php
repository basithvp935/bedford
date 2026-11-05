<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Crypt;
class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();



        Route::bind('blogs_slug', function ($slug) {
            return \App\Models\Blog::where('blogs_slug', $slug)->firstOrFail();
        });


        Route::bind('category_slug', function ($slug) {
            return \App\Models\Category::where('category_slug', $slug)->firstOrFail();
        });

        Route::bind('activity_slug', function ($slug) {
            return \App\Models\ActivityHub::where('activity_slug', $slug)->firstOrFail();
        });

        Route::bind('event_calendar_slug', function ($slug) {
            return \App\Models\EventCalendar::where('event_calendar_slug', $slug)->firstOrFail();
        });

        Route::bind('news_slug', function ($slug) {
            return \App\Models\News::where('news_slug', $slug)->firstOrFail();
        });


        Route::bind('banner', function ($id) {
            return \App\Models\HomeBanner::findOrfail($id);
        });

        Route::bind('alumny', function ($id) {
            return \App\Models\Alumni::findOrfail($id);
        });

        Route::bind('management-committee', function ($id) {
            return \App\Models\ManagementCommitty::findOrfail($id);
        });


    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
