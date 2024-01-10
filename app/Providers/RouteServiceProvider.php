<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/';

    public const USERS = '/team';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web/web.php'));

            Route::middleware('admin')
                ->middleware('web')
                ->group(base_path('routes/web/posts.php'));

            Route::middleware('admin')
                ->middleware('web')
                ->group(base_path('routes/web/users.php'));

            Route::middleware('admin')
                ->middleware('web')
                ->group(base_path('routes/web/maintenance.php'));

            Route::middleware('admin')
                ->middleware('web')
                ->group(base_path('routes/web/types.php'));

            Route::middleware('admin')
                ->middleware('web')
                ->group(base_path('routes/web/vehicles.php'));

            Route::middleware('admin')
                ->middleware('web')
                ->group(base_path('routes/web/rentals.php'));

            Route::middleware('admin')
                ->middleware('web')
                ->group(base_path('routes/web/coc.php'));

            Route::middleware('admin')
                ->middleware('web')
                ->group(base_path('routes/web/customers.php'));

            Route::middleware('admin')
                ->middleware(['web', 'auth', 'role:dev'])
                ->group(base_path('routes/web/roles.php'));

            Route::middleware('team')
                ->middleware(['web'])
                ->group(base_path('routes/web/office.php'));

            Route::middleware('team')
                ->middleware(['web'])
                ->group(base_path('routes/web/dock.php'));

            Route::middleware('runnerview')
                ->middleware(['web'])
                ->group(base_path('routes/web/runnerview.php'));


        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
