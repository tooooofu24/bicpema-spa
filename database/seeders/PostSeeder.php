<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $posts = array(
        //     array('id' => '1', 'title' => 'ドップラー効果', 'js_url' => 'https://dl.dropboxusercontent.com/s/18p99gcdef6wifn/doppler.js', 'thumbnail_url' => 'https://live.staticflickr.com/65535/51591712806_5ac6dde547_k.jpg', 'share_link_url' => 'https://github.com/ohiaeni/physics_simulations_processing.git', 'comment' => 'ドップラー効果のシミュレーション教材です。', 'area_id' => '20', 'user_id' => '2',),
        //     array('id' => '2', 'title' => '斜方投射', 'js_url' => 'https://dl.dropboxusercontent.com/s/1gozshnziuua1gm/projectile_motion.js', 'thumbnail_url' => 'https://live.staticflickr.com/65535/51590882762_6572c6bc77_k.jpg', 'share_link_url' => 'https://github.com/ohiaeni/physics_simulations_processing.git', 'comment' => '斜方投射のシミュレーション教材です。', 'area_id' => '17', 'user_id' => '2',),
        //     array('id' => '3', 'title' => '光の見え方', 'js_url' => 'https://dl.dropboxusercontent.com/s/51ete0ydx3a3d8l/RGB.js', 'thumbnail_url' => 'https://live.staticflickr.com/65535/51591712741_45613c6545_k.jpg', 'share_link_url' => 'https://github.com/ohiaeni/physics_simulations_processing.git', 'comment' => '光の見え方のシミュレーション教材です。', 'area_id' => '20', 'user_id' => '2'),
        //     array('id' => '4', 'title' => 'ばねの単振動', 'js_url' => 'https://dl.dropboxusercontent.com/s/l8qesblshicu88t/spring.js', 'thumbnail_url' => 'https://live.staticflickr.com/65535/51592371899_c9514c2fa2_k.jpg', 'share_link_url' => 'https://github.com/ohiaeni/physics_simulations_processing.git', 'comment' => 'ばねの単振動のシミュレーション教材です。', 'area_id' => '17', 'user_id' => '2'),
        //     array('id' => '5', 'title' => '波の干渉', 'js_url' => 'https://dl.dropboxusercontent.com/s/gldk7bfd5sltbt1/wave_interference.js', 'thumbnail_url' => 'https://live.staticflickr.com/65535/51590882657_a98f7161ed_k.jpg', 'share_link_url' => 'https://github.com/ohiaeni/physics_simulations_processing.git', 'comment' => '波の干渉のシミュレーション教材です。', 'area_id' => '20', 'user_id' => '2'),
        //     array('id' => '6', 'title' => '振り子', 'js_url' => 'https://dl.dropboxusercontent.com/s/hvlp603q5tc8pub/pendulum.js', 'thumbnail_url' => 'https://live.staticflickr.com/65535/51692118061_b87d0dd266_o.png', 'share_link_url' => 'https://github.com/ohiaeni/physics_simulations_processing.git', 'comment' => '振り子のシミュレーション教材です。', 'area_id' => '17', 'user_id' => '2')
        // );
        Post::factory()->count(100)->create();
    }
}
