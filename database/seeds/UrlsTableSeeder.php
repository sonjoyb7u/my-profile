<?php

use Illuminate\Database\Seeder;
use App\Models\Url;

class UrlsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url_links = [

            [
                'name' => 'facebook',
                'url_link' => 'https://www.facebook.com/sonjoy.john',

            ],
            [
                'name' => 'twitter',
                'url_link' => 'https://www.facebook.com/sonjoy_john',
            ],
            [
                'name' => 'github',
                'url_link' => 'https://www.github.com/sonjoyb7u',
            ],
            [
                'name' => 'linkedin',
                'url_link' => 'www.linkedin.com/in/sonjoyb7u',
            ],
            [
                'name' => 'cv',
                'url_link' => 'https://drive.google.com/open?id=1uWhPWfh0kDyLCDaw86ZlLQlKCuGjTY0x',
            ],

        ];

        foreach($url_links as $key => $url_link) {
            Url::create($url_link);
        }
    }
}
