<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Project;

// Helpers per slug
use Illuminate\Support\Str;
//importazione carbon
use Carbon\Carbon;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();
        for ($i = 0; $i < 10; $i++) {

            $name = fake()->sentence();
            $slug = Str::slug($name);
            $project = Project::create([
                'name' => $name,
                'description' => fake()->paragraph(),
                'technologies'=> fake()->word(),
                'creation_date'=>Carbon::now(),
            ]);
        }
    }
}