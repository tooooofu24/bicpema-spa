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
        $posts = array(
            array('title' => 'ドップラー効果', 'file_url' => 'https://dl.dropboxusercontent.com/s/18p99gcdef6wifn/doppler.js', 'thumbnail_url' => 'https://live.staticflickr.com/65535/51591712806_5ac6dde547_k.jpg', 'share_link_url' => 'https://github.com/ohiaeni/physics_simulations_processing.git', 'comment' => 'ドップラー効果のシミュレーション教材です。', 'area_id' => '20', 'user_id' => '2',),
            array('title' => '斜方投射', 'file_url' => 'https://dl.dropboxusercontent.com/s/1gozshnziuua1gm/projectile_motion.js', 'thumbnail_url' => 'https://live.staticflickr.com/65535/51590882762_6572c6bc77_k.jpg', 'share_link_url' => 'https://github.com/ohiaeni/physics_simulations_processing.git', 'comment' => '斜方投射のシミュレーション教材です。', 'area_id' => '17', 'user_id' => '2',),
            array('title' => '光の見え方', 'file_url' => 'https://dl.dropboxusercontent.com/s/51ete0ydx3a3d8l/RGB.js', 'thumbnail_url' => 'https://live.staticflickr.com/65535/51591712741_45613c6545_k.jpg', 'share_link_url' => 'https://github.com/ohiaeni/physics_simulations_processing.git', 'comment' => '光の見え方のシミュレーション教材です。', 'area_id' => '20', 'user_id' => '2'),
            array('title' => 'ばねの単振動', 'file_url' => 'https://dl.dropboxusercontent.com/s/l8qesblshicu88t/spring.js', 'thumbnail_url' => 'https://live.staticflickr.com/65535/51592371899_c9514c2fa2_k.jpg', 'share_link_url' => 'https://github.com/ohiaeni/physics_simulations_processing.git', 'comment' => 'ばねの単振動のシミュレーション教材です。', 'area_id' => '17', 'user_id' => '2'),
            array('title' => '波の干渉', 'file_url' => 'https://dl.dropboxusercontent.com/s/gldk7bfd5sltbt1/wave_interference.js', 'thumbnail_url' => 'https://live.staticflickr.com/65535/51590882657_a98f7161ed_k.jpg', 'share_link_url' => 'https://github.com/ohiaeni/physics_simulations_processing.git', 'comment' => '波の干渉のシミュレーション教材です。', 'area_id' => '20', 'user_id' => '2'),
            array('title' => '振り子', 'file_url' => 'https://dl.dropboxusercontent.com/s/hvlp603q5tc8pub/pendulum.js', 'thumbnail_url' => 'https://live.staticflickr.com/65535/51692118061_b87d0dd266_o.png', 'share_link_url' => 'https://github.com/ohiaeni/physics_simulations_processing.git', 'comment' => '振り子のシミュレーション教材です。', 'area_id' => '17', 'user_id' => '2'),
            ['title' => 'ペンデュラムウェーブ', 'file_url' => 'https://dl.dropboxusercontent.com/s/2jt1x46wskfen9q/pendulum_wave.js', 'thumbnail_url' => 'https://live.staticflickr.com/65535/51694707846_c26d9d75c3_o.png', 'share_link_url' => 'https://github.com/ohiaeni/physics_simulations_processing.git', 'comment' => 'ペンデュラムウェーブのシミュレーション教材です。', 'area_id' => 17, 'user_id' => 2],
            ['title' => '自由端反射と固定端反射', 'file_url' => 'https://dl.dropboxusercontent.com/s/o01p5erzj6f4nl2/wave_reflection.js', 'thumbnail_url' => 'https://live.staticflickr.com/65535/51776630095_8cef02e222_o.png', 'share_link_url' => 'https://github.com/ohiaeni/physics_simulations_processing.git', 'comment' => '自由端反射と固定端反射のシミュレーション教材です。', 'area_id' => 20, 'user_id' => 2],
            ['title' => 'バウンドウェーブ', 'file_url' => 'https://dl.dropboxusercontent.com/s/x7wo5silc4haqzl/bound_wave.js', 'thumbnail_url' => 'https://live.staticflickr.com/65535/51776456664_869aa80eed_o.png', 'share_link_url' => 'https://github.com/ohiaeni/physics_simulations_processing.git', 'comment' => 'バウンドウェーブのシミュレーション教材です。', 'area_id' => 17, 'user_id' => 2],
            ['title' => '等速直線運動と等加速度直線', 'file_url' => 'https://dl.dropboxusercontent.com/s/ypduvgv3ff893tp/motion_compare.js', 'thumbnail_url' => 'https://live.staticflickr.com/65535/51778319353_2e9bbdc77f_o.png', 'share_link_url' => 'https://github.com/ohiaeni/physics_simulations_processing.git', 'comment' => '等速直線運動と等加速度直線運動のシミュレーション教材です。', 'area_id' => 20, 'user_id' => 2],
            ['title' => '垂直抗力', 'file_url' => 'https://dl.dropboxusercontent.com/s/j9gpbx3uc51a1xr/normal_force.js', 'thumbnail_url' => 'https://live.staticflickr.com/65535/51925971764_7685aebf69_o.png', 'share_link_url' => 'https://github.com/ohiaeni/physics_simulations_processing.git', 'comment' => '垂直抗力のシミュレーション教材です。', 'area_id' => 17, 'user_id' => 2],
            ['title' => '凸レンズと凹レンズ', 'file_url' => 'https://dl.dropboxusercontent.com/s/3b2osaicqxunl0y/lens.js', 'thumbnail_url' => 'https://live.staticflickr.com/65535/52074425211_920f763070_o.png', 'share_link_url' => 'https://github.com/ohiaeni/physics_simulations_processing.git', 'comment' => '凸レンズと凹レンズのシミュレーション教材です。', 'area_id' => 17, 'user_id' => 2],
        );
        Post::insert($posts);
        Post::factory()->count(100)->create();
    }
}
