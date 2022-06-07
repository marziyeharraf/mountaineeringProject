<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Tag();
        $tag->name = "news";
        $tag->save();

        $tag = new Tag();
        $tag->name = "koohpaye";
        $tag->save();

        $tag = new Tag();
        $tag->name = "babakoohi";
        $tag->save();

        $tag = new Tag();
        $tag->name = "derak";
        $tag->save();

    }
}
