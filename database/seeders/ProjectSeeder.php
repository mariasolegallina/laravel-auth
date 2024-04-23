<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 15; $i++) {
            $new_project = new Project();

            $new_project->title = $faker->sentence(6);
            $new_project->description = $faker->text(200);

            $new_project->save();
        }
    }
}
