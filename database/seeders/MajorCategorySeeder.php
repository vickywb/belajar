<?php

namespace Database\Seeders;

use App\Models\MajorCategory;
use Illuminate\Database\Seeder;

class MajorCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MajorCategory::create([
            'name' => 'Pelayaran'
        ]);

        MajorCategory::create([
            'name' => 'Otomotif'
        ]);

        MajorCategory::create([
            'name' => 'Perkapalan'
        ]);
    }
}
