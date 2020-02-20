<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//     factory(\App\Post::class,1)->create();
//    factory(\App\Customer::class,100)->create();
        factory(\App\Employee::class,20)->create();
        factory(\App\User::class,20)->create();
        factory(\App\Affiliation::class,20)->create();

    }
}
