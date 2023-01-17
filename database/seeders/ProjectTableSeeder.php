<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $projects = [

            [
                'title' => 'Boolflix',
                'type' => 'Front-End',
            ],

            [
                'title' => 'Spotify Web',
                'type' => 'Front-End',
            ],

            [
                'title' => 'Laravel Comics',
                'type' => 'Back-End',
            ],

            [
                'title' => 'Laravel Auth',
                'type' => 'Back-End',
            ],

            [
                'title' => 'Boolzapp',
                'type' => 'Front-End',
            ],

        ];

        foreach ($projects as $project) {

            $new_project = new Project;
            $new_project->title = $project['title'];
            $new_project->slug = Str::slug($project['title'], '-');
            $new_project->type = $project['type'];
            $new_project->save();
        }
    }
}
