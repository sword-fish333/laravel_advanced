<?php
namespace services;

namespace App\Providers;

use App\Employee;
use App\Repositories\Employee\DbEmployeeRepository;
use App\Repositories\Employee\EmployeeRepository;
use App\Repositories\Employee\XmlEmployeeRepository;
use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        dd(1);
        $this->app->bind(EmployeeRepository::class,function(){
            return new DbEmployeeRepository(new Employee());
        });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        dd(1);

//        $this->app->bind(EmployeeRepository::class,DbEmployeeRepository::class);

    }
}
