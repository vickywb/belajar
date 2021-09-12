<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $directory = 'profile';
        $ext = 'jpg';
        $avatar = Str::random(34). '.' . $ext;
        $url = "https://source.unsplash.com/random";
        $file = file_get_contents($url);
        Storage::disk($directory)->put($avatar, $file);

        User::Create([
            'role_id' => '1',
            'name' => 'Admin',
            'email' => 'hello@admin.com',
            'password' => Hash::make('password'),
            'address' => 'Jalan Panduk',
            'phone_number' => '08123131421',
            'image' => $avatar
        ]);

        User::Create([
            'role_id' => '2',
            'name' => 'Teacher',
            'email' => 'hello@teacher.com',
            'password' => Hash::make('password'),
            'address' => 'Jalan Panduk',
            'phone_number' => '08123131421',
            'image' => $avatar
        ]);

        User::Create([
            'role_id' => '3',
            'name' => 'Student ',
            'email' => 'hello@student.com',
            'password' => Hash::make('password'),
            'address' => 'Jalan Panduk',
            'phone_number' => '08123131421',
            'image' => $avatar
        ]);

    
    }
}
