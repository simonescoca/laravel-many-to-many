<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = [
            'Webapp', 'Portfolio', 'Shopify', 'Social'
        ];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->name = $type;
            $newType->slug = Str::of($type)->slug('-');
            $newType->color = $faker->hexColor();
            $newType->save();
        }
    }
}