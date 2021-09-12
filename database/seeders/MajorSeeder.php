<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $directory = 'major';
        $ext = 'jpg';
        $avatar = Str::random(34). '.' . $ext;
        $url = "https://source.unsplash.com/random";
        $file = file_get_contents($url);
        Storage::disk($directory)->put($avatar, $file);

        Major::create([
            'category_id' => '1',
            'name' => 'Nautika Kapal Niaga',
            'description' => 'nautika kapal niaga',
            'image' => $avatar
        ]);

        Major::create([
            'category_id' => '1',
            'name' => 'Teknik Kapal Niaga',
            'description' => 'teknik kapal niaga',
            'image' => $avatar
        ]);

        Major::create([
            'category_id' => '2',
            'name' => 'Teknik Kendaraan Ringan Otomotif',
            'description' => 'teknik kendaraan ringan otomotif',
            'image' => $avatar
        ]);

        Major::create([
            'category_id' => '3',
            'name' => 'Teknik Kontruksi Kapal Baja',
            'description' => 'teknik kontruksi kapal baja',
            'image' => $avatar
        ]);

        Major::create([
            'category_id' => '3',
            'name' => 'Teknik Pemesinan Kapal',
            'description' => 'teknik pemesinan kapal',
            'image' => $avatar
        ]);
    }
}
