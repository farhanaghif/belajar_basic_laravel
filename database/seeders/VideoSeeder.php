<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        do {
            $code = Str::random(12);
        } while (
            Video::where('code', $code)->first()
        );

        $data = [
            'title' => "16 FITUR KEREN di iOS16‼️ (Under 10 Mins!!)",
            'user_id' => 1,
            'code' => $code,
            'url' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/cwOyngdm3eU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem fugit commodi dolorum omnis dolores blanditiis odit, perferendis, hic vero reprehenderit natus consequuntur cupiditate, quos corrupti quia laudantium amet est quis. Corrupti inventore ipsum, in hic cum rerum numquam molestiae placeat, at esse amet excepturi odit, aliquam aut deleniti earum incidunt.',
            'publish' => 1
        ];
        Video::create($data);
        
    }
}
