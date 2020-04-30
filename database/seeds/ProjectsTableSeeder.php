<?php

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
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
              'user_id' => 1,
              'category_id' => 1,
              'name' => 'Psd Mockup-1',
              'slug' => 'psd-mockup-1',
              'desc' => 'Description of project Psd Mockup 1...',
              'image' => 'psd_mockup_1.png',
            ],
             [
              'user_id' => 1,
              'category_id' => 2,
              'name' => 'UI and UX-1',
              'slug' => 'ui-and-ux-1',
              'desc' => 'Description of project UI and UX 1...',
              'image' => 'ui_ux_1.png',
            ],
             [
              'user_id' => 1,
              'category_id' => 3,
              'name' => 'Markup-1',
              'slug' => 'markup-1',
              'desc' => 'Description of project Markup 1...',
              'image' => 'markup_1.png',
            ],
             [
              'user_id' => 1,
              'category_id' => 4,
              'name' => 'Development-1',
              'slug' => 'development-1',
              'desc' => 'Description of project Development 1...',
              'image' => 'development_1.png',
            ],
             [
              'user_id' => 1,
              'category_id' => 5,
              'name' => 'IT-1',
              'slug' => 'it-1',
              'desc' => 'Description of project IT 1...',
              'image' => 'it_1.png',
            ],
             [
              'user_id' => 1,
              'category_id' => 4,
              'name' => 'Development-2',
              'slug' => 'development-2',
              'desc' => 'Description of project Development 2...',
              'image' => 'psd_mockup_2.png',
            ],
             [
              'user_id' => 1,
              'category_id' => 2,
              'name' => 'UI and UX-2',
              'slug' => 'ui-ux-2',
              'desc' => 'Description of UI and UX 2...',
              'image' => 'ui_ux_2.png',
            ],

        ];

        foreach($projects as $row) {
            Project::create($row);
        }
    }
}
