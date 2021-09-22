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

        $this->call(BannersTableSeeder::class);
        $this->call(ActivitysTableSeeder::class);
        $this->call(SopTableSeeder::class);
        $this->call(NoticesTableSeeder::class);
        $this->call(CarsTableSeeder::class);
        $this->call(PowersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);

        $this->call(AdminTableSeeder::class);
    }
}
