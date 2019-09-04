<?php

use Illuminate\Database\Seeder;
use App\Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::create([
        	'from_id' => 1,
        	'to_id' => 2,
        	'content' => 'Hola, como estas?'
        ]);

        Message::create([
        	'from_id' => 2,
        	'to_id' => 1,
        	'content' => 'Muy bien y tu?'
        ]);

        Message::create([
            'from_id' => 1,
            'to_id' => 3,
            'content' => 'Buen día Oscar, espero que te encuentres bien.'
        ]);

        Message::create([
            'from_id' => 3,
            'to_id' => 1,
            'content' => 'Buen día Alejandro. A la orden.'
        ]);
    }
}
