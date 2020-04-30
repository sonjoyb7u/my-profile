<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'name' => 'PSD',
                'slug' => 'psd',
            ],
            [
                'name' => 'UI/UX',
                'slug' => 'ui-ux',
            ],
            [
                'name' => 'MARKUP',
                'slug' => 'markup',
            ],
            [
                'name' => 'DEVELOPMENT',
                'slug' => 'development',
            ],
            [
                'name' => 'IT',
                'slug' => 'it',
            ],

        ];

        foreach($category as $row) {
            Category::create($row);
        }
    }
}
