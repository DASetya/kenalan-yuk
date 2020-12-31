<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Syukur;
use Faker\Factory;
use Illuminate\Support\Carbon;

class SyukurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $syukurs = []; // prepare array kosong

        // Prepare data dummy syukur
        for ($i=0; $i<5; $i++) {
            $syukurs[] = [
                'user_id' => 1,
                'story' => $faker->text,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ];
        }

        // Insert data dummy ke db
        Syukur::insert($syukurs);
    }
}
