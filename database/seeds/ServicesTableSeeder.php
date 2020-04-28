<?php

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'title' => 'PSD Mockup',
                'sub_title' => 'There are many variations of passages of but the majority have suffered alteration in some form.',
                'icon_name' => 'mbri-responsive',
            ],
            [
                'title' => 'UI & UX Markup',
                'sub_title' => 'There are many variations of passages of but the majority have suffered alteration in some form.',
                'icon_name' => 'mbri-laptop',
            ],
            [
                'title' => 'Responsive Web Design',
                'sub_title' => 'There are many variations of passages of but the majority have suffered alteration in some form.',
                'icon_name' => 'mbri-website-theme',
            ],
            [
                'title' => 'Web Development',
                'sub_title' => 'There are many variations of passages of but the majority have suffered alteration in some form.',
                'icon_name' => 'mbri-sites',
            ],
            [
                'title' => 'IT Support',
                'sub_title' => 'There are many variations of passages of but the majority have suffered alteration in some form.',
                'icon_name' => 'mbri-database',
            ],
            [
                'title' => 'Easy to Serve',
                'sub_title' => 'There are many variations of passages of but the majority have suffered alteration in some form.',
                'icon_name' => 'mbri-setting',
            ],

        ];

        foreach ($services as $row) {
            Service::create($row);
        }
    }
}
