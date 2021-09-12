<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $directory = 'article';
        $ext = 'jpg';
        $avatar = Str::random(34). '.' . $ext;
        $url = "https://source.unsplash.com/random";
        $file = file_get_contents($url);
        Storage::disk($directory)->put($avatar, $file);

        Article::create([
        'title' => 'Pendaftaran Siswa Baru Tahun Ajaran 2021-2022',
        'slug' => 'pendaftaran-siswa-baru-tahun-ajaran-2021-22',
        'description' => '
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente neque voluptatum necessitatibus non dignissimos? 
            Tenetur nisi praesentium dolores molestiae, omnis delectus voluptatum ex aut nihil eligendi obcaecati temporibus atque eos at aperiam. 
            Harum animi vel, sint dolore nam incidunt nesciunt inventore a blanditiis aliquam quas officia nulla quia molestias perspiciatis.
            Amet minus assumenda vero eveniet fugiat? Ab libero rerum aspernatur obcaecati cumque id harum recusandae cum quae reprehenderit dolores,
            doloremque consequatur et minus commodi repellendus illo optio, nesciunt aperiam esse, voluptate nihil totam vel impedit. 
            At cumque accusantium rerum quas perspiciatis, voluptates, laborum nihil amet praesentium eligendi odit quia voluptatum eaque
            ad minima sequi a nemo minus veniam. Labore fugit ipsam sequi molestiae, quo eveniet magnam culpa ab. Natus neque accusamus facilis, 
            voluptate eaque reiciendis, maiores cumque asperiores veritatis quia, sed blanditiis aliquam labore placeat incidunt minima magnam? 
            Numquam mollitia et reiciendis, fugiat eaque voluptates voluptas totam, repellat hic quis, molestiae inventore qui facere iusto dolorum velit 
            aliquam labore provident tenetur accusamus minus odio. Ex voluptatem mollitia inventore maiores. Culpa magni quod exercitationem natus odit 
            rem facilis quo. Quibusdam obcaecati voluptates sapiente atque commodi facere dolorum eveniet, cupiditate temporibus accusantium ut, officia aut, 
            at suscipit esse optio assumenda consequuntur voluptatum sint magnam officiis non dolore sit tempore. Provident sint quasi eius blanditiis eos assumenda, 
            quae similique itaque fuga, quidem nemo, natus quis facere cupiditate totam consequuntur animi atque aperiam. Accusantium recusandae minima voluptas, 
            libero quibusdam aperiam fugiat voluptates laboriosam dicta vitae temporibus ipsa a aliquid cumque voluptatibus eum totam 
            magnam consectetur vero sint repellendus alias. Est alias eos, assumenda veritatis aperiam itaque ratione, iste similique nostrum, 
            repellat soluta nulla eaque voluptate culpa ullam quia excepturi! Pariatur atque maxime itaque non, neque, libero esse optio, ',
        'image' => $avatar,
        'views' => '0'

        ]);

        Article::create([
            'title' => 'Upacara Memperingati 17 Agustus',
            'slug' => 'upacara-memperingati-17-agustus',
            'description' => '
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente neque voluptatum necessitatibus non dignissimos? 
                Tenetur nisi praesentium dolores molestiae, omnis delectus voluptatum ex aut nihil eligendi obcaecati temporibus atque eos at aperiam. 
                Harum animi vel, sint dolore nam incidunt nesciunt inventore a blanditiis aliquam quas officia nulla quia molestias perspiciatis.
                Amet minus assumenda vero eveniet fugiat? Ab libero rerum aspernatur obcaecati cumque id harum recusandae cum quae reprehenderit dolores,
                doloremque consequatur et minus commodi repellendus illo optio, nesciunt aperiam esse, voluptate nihil totam vel impedit. 
                At cumque accusantium rerum quas perspiciatis, voluptates, laborum nihil amet praesentium eligendi odit quia voluptatum eaque
                ad minima sequi a nemo minus veniam. Labore fugit ipsam sequi molestiae, quo eveniet magnam culpa ab. Natus neque accusamus facilis, 
                voluptate eaque reiciendis, maiores cumque asperiores veritatis quia, sed blanditiis aliquam labore placeat incidunt minima magnam? 
                Numquam mollitia et reiciendis, fugiat eaque voluptates voluptas totam, repellat hic quis, molestiae inventore qui facere iusto dolorum velit 
                aliquam labore provident tenetur accusamus minus odio. Ex voluptatem mollitia inventore maiores. Culpa magni quod exercitationem natus odit 
                rem facilis quo. Quibusdam obcaecati voluptates sapiente atque commodi facere dolorum eveniet, cupiditate temporibus accusantium ut, officia aut, 
                at suscipit esse optio assumenda consequuntur voluptatum sint magnam officiis non dolore sit tempore. Provident sint quasi eius blanditiis eos assumenda, 
                quae similique itaque fuga, quidem nemo, natus quis facere cupiditate totam consequuntur animi atque aperiam. Accusantium recusandae minima voluptas, 
                libero quibusdam aperiam fugiat voluptates laboriosam dicta vitae temporibus ipsa a aliquid cumque voluptatibus eum totam 
                magnam consectetur vero sint repellendus alias. Est alias eos, assumenda veritatis aperiam itaque ratione, iste similique nostrum, 
                repellat soluta nulla eaque voluptate culpa ullam quia excepturi! Pariatur atque maxime itaque non, neque, libero esse optio, ',
            'image' => $avatar,
            'views' => '0'
    
            ]);

        Article::create([
            'title' => 'Pelepasan Siswa Tahun Ajaran 2020-2021',
            'slug' => 'pelepasan-siswa-tahun-ajaran-2021-2022',
            'description' => '
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente neque voluptatum necessitatibus non dignissimos? 
                Tenetur nisi praesentium dolores molestiae, omnis delectus voluptatum ex aut nihil eligendi obcaecati temporibus atque eos at aperiam. 
                Harum animi vel, sint dolore nam incidunt nesciunt inventore a blanditiis aliquam quas officia nulla quia molestias perspiciatis.
                Amet minus assumenda vero eveniet fugiat? Ab libero rerum aspernatur obcaecati cumque id harum recusandae cum quae reprehenderit dolores,
                doloremque consequatur et minus commodi repellendus illo optio, nesciunt aperiam esse, voluptate nihil totam vel impedit. 
                At cumque accusantium rerum quas perspiciatis, voluptates, laborum nihil amet praesentium eligendi odit quia voluptatum eaque
                ad minima sequi a nemo minus veniam. Labore fugit ipsam sequi molestiae, quo eveniet magnam culpa ab. Natus neque accusamus facilis, 
                voluptate eaque reiciendis, maiores cumque asperiores veritatis quia, sed blanditiis aliquam labore placeat incidunt minima magnam? 
                Numquam mollitia et reiciendis, fugiat eaque voluptates voluptas totam, repellat hic quis, molestiae inventore qui facere iusto dolorum velit 
                aliquam labore provident tenetur accusamus minus odio. Ex voluptatem mollitia inventore maiores. Culpa magni quod exercitationem natus odit 
                rem facilis quo. Quibusdam obcaecati voluptates sapiente atque commodi facere dolorum eveniet, cupiditate temporibus accusantium ut, officia aut, 
                at suscipit esse optio assumenda consequuntur voluptatum sint magnam officiis non dolore sit tempore. Provident sint quasi eius blanditiis eos assumenda, 
                quae similique itaque fuga, quidem nemo, natus quis facere cupiditate totam consequuntur animi atque aperiam. Accusantium recusandae minima voluptas, 
                libero quibusdam aperiam fugiat voluptates laboriosam dicta vitae temporibus ipsa a aliquid cumque voluptatibus eum totam 
                magnam consectetur vero sint repellendus alias. Est alias eos, assumenda veritatis aperiam itaque ratione, iste similique nostrum, 
                repellat soluta nulla eaque voluptate culpa ullam quia excepturi! Pariatur atque maxime itaque non, neque, libero esse optio, ',
            'image' => $avatar,
            'views' => '0'
    
            ]);

           
    }
}
