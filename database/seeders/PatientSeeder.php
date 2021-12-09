<?php

namespace Database\Seeders;

use Faker\Core\Number;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Patient::factory()->count(20)->create();
    }
}
