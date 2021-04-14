<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\StatusesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call([
            UsersTableSeeder::class,
            StatusesTableSeeder::class
        ]);

        Model::reguard();

    }
}
