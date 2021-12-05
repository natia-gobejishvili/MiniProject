<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 
            $video = new Video();
            $video->fill([
                'title' => Str::random(30),
                'meta_description' => Str::random(100),
                'body' => Str::random(300),
                'link' => 'https://youtu.be/QSLMVtE98uE?list=RDQSLMVtE98uE',
                'name' => Str::random(20),
                "view" => rand(0, 1000000)
            ])->save();
        }
    }
}
