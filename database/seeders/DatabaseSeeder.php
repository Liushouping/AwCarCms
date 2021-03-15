<?php

namespace Database\Seeders;

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
        $this->call(UsersTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(ActivitysTableSeeder::class);
        $this->call(InfosTableSeeder::class);

        $this->call(\Encore\Admin\Auth\Database\AdminTablesSeeder::class);
    }
}
