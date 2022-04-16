<?php

namespace App\Providers;

use App\Models\Admin;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

//        // only admin can add a new admin
        Gate::define('add_admin', fn(Admin $user) => $user->admin_category === 'Admin');
        // only admin can edit an admin
        Gate::define('edit_admin', fn(Admin $user) => $user->admin_category === 'Admin');
        // only admin can delete an admin
        Gate::define('delete_admin', fn(Admin $user) => $user->admin_category === 'Admin');

        // if we want to return a message we do this
//        Gate::define('add_admin', function (Admin $user) {
//            return $user->admin_category === 'Admin' ? Response::allow() : Response::deny('You must be an Admin to access this page.');
//        });
    }
}
