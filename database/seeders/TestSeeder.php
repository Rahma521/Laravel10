<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Test::factory()->count(20)->create();
        // for ($i = 0; $i < 10; $i++) {
        // Test::create([
        //     'name' => 'name_'.$i,
        //     'contact'=> 'contact_1223'.$i,
        //     'country' => 'country'.$i,
        // ]);
        // }
    }
}
