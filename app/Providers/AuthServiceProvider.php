<?php

namespace App\Providers;

use App\User;
use App\Problemset;
use App\Solution;

use App\Policies\UserPolicy;
use App\Policies\ProblemsetPolicy;
use App\Policies\SolutionPolicy;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
	User::class => UserPolicy::class,
	Problemset::class => ProblemsetPolicy::class,
	Solution::class => SolutionPolicy::class,
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        //
    }
}
