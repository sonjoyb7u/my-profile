<?php

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = [

            [
                'name' => 'Client 1',
                'comment' => 'When the user clicks the .btn-follow button, the user is added to the subscribed list and the data is stored in the database accordingly',

            ],
            [
                'name' => 'Client 2',
                'comment' => 'When the user clicks the .btn-follow button, the user is added to the subscribed list and the data is stored in the database accordingly',

            ],
            [
                'name' => 'Client 3',
                'comment' => 'When the user clicks the .btn-follow button, the user is added to the subscribed list and the data is stored in the database accordingly',

            ],
            [
                'name' => 'Client 4',
                'comment' => 'When the user clicks the .btn-follow button, the user is added to the subscribed list and the data is stored in the database accordingly',
            ],

        ];

        foreach($clients as $key => $client) {
           Client::create($client);
        }
    }
}
