<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post([
            'title' => 'mountain',
            'content'=> 'about mountain',
            'date' => '1400/01/01',
            'location' => 'SHIRAZ',
            'count' => '100',
            'time' => '1',
            'age' => '4'
        ]);
    $post->save();
    }

    
}
