<?php

namespace App\Providers;

use App\Models\Movie;
use App\Policies\PeliculaPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use App\Models\Director;
use App\Policies\DirectorPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //'App\Models\Model' => 'App\Policies\ModelPolicy',
        Movie::class => PeliculaPolicy::class,
        //'App\Models\Model' => 'App\Policies\PeliculaPolicy',

        Director::class => DirectorPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
