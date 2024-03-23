<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\project;
use faker\Factory as faker;

class projectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();
        for ($i = 1; $i <= 77; $i++) {
            project::create([
                'fullname' => $faker->name,
                'projectdetails' => $faker->words(2, true),
                'dater' => now(),
                'statusr' => '2',
                'descriptionr' => $faker->paragraph(2, true)

            ]);
        }
    }
}
