<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([ 
            [
            'title' => 'Digital Currency', 
            'content' => 'Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. 
                          Nunc ornare leo tortor.', 
            'image' => '/assets/images/service_01.jpg'
        ],
        [
            'title' => 'Market Analysis', 
            'content' => 'Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. 
                          Nunc ornare leo tortor.', 
            'image' => '/assets/images/service_02.jpg'
        ],
        [
            'title' => 'Historical Data', 
            'content' => 'Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. 
                          Nunc ornare leo tortor.', 
            'image' => '/assets/images/service_03.jpg'
        ]
    ]);
    }
}

