<?php

namespace Database\Seeders;
use App\Models\Type;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $typeIds = Type::all()->pluck('id');

        for ($i = 0 ; $i < 100 ; $i++) {
            $newProject = new Project();
            $newProject->type_id = $faker->randomElement($typeIds);
            $newProject->title = ucfirst($faker->unique()->words(7, true));
            $newProject->content = $faker->paragraphs(10, true);
            $newProject->url = $faker->url();
            $newProject->slug = Str::of($newProject->title)->slug('-');
            $newProject->image = $faker->imageUrl(480, 360, 'post', true, 'posts', true, 'png');
            $newProject->save();
            $newProject->slug = Str::of("$newProject->id " . $newProject->title)->slug('-');
            $newProject->save();
        }
    }
}