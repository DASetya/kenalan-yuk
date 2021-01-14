<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\MyStoryCategory;
use Faker\Factory;

class MyStoryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $categories = []; // prepare array kosong

        // Prepare data dummy syukur
        for ($i=1; $i<=5; $i++) {
            $categories = [
                [
                    'name' => 'Ceritakan diri kamu.',
                    'description' => $faker->text,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Bagaimana orang lain kamu?',
                    'description' => $faker->text,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Bagaimana teman-temanmu memandang Kamu?',
                    'description' => $faker->text,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Bagaimana mahasiswa lain memandang Kamu?',
                    'description' => $faker->text,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Bagaimana dosen memandang Kamu?',
                    'description' => $faker->text,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Perkenalkan anggota keluargamu dan seberapa dekat dengan anggota keluargamu?',
                    'description' => $faker->text,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
            ];
        }

        // Insert data dummy ke db
        MyStoryCategory::insert($categories);
    }
}
