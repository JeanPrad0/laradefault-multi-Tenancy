<?php

namespace App\Providers;

use App\Models\Permission;
use App\Models\UserAccount;
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
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

            try {
                if (\Schema::hasTable('permissions')) {
                // criando os Gate de Acesso
                    foreach ($this->getPermissions() as $permission) {
                        $gate->define($permission->name, function (UserAccount $userAccount) use ($permission) {
                            return $userAccount->hasPermission($permission);
                        });
                    }
                }
            } catch (\Illuminate\Database\QueryException $ex) {
                return;
            } 
    }

    protected function getPermissions()
    {
        return Permission::with('role')->get();
    }
}
