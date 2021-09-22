<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Power;

class PowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Power::factory()->count(9)->create();
    }
}
