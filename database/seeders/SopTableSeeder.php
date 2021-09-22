<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sop;

class SopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Sop::factory()->count(1)->create();
    }
}
