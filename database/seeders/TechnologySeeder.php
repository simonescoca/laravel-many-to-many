<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
    */
    public function run(Faker $faker): void{$technologies = ['php8', 'HTML5', 'css3', 'sass', 'vue3', 'vite', 'laravel10', 'mySQL', 'Javascript'];

        foreach ($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->name = $technology;
            $newTechnology->color = $faker->unique()->safeHexColor();
            $newTechnology->save();
        }
    }
}