<?php

use Illuminate\Database\Seeder;
use App\Models\BlogCategory;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog_categories = [
            [
                'name' => 'PSD Mockup',
                'slug' => 'psd-mockup',
            ],
            [
                'name' => 'UI/UX Design',
                'slug' => 'ui-ux-design',
            ],
            [
                'name' => 'Frontend Development',
                'slug' => 'frontend-development',
            ],
            [
                'name' => 'Backend Development',
                'slug' => 'backend-development',
            ],
            [
                'name' => 'IT Management',
                'slug' => 'it-management',
            ],

        ];

        foreach($blog_categories as $row) {
            BlogCategory::create($row);
        }


    }
}
