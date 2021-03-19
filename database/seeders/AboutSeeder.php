<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([ 
            [
            'title' => 'William Smith', 
            'little_title' => 'Co-Founder',
            'content' => 'In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.', 
            'image' => '/assets/images/team_01.jpg'
        ],
        [
            'title' => 'Mary Houston', 
            'little_title' => 'Chief Marketing Officer',
            'content' => 'FIn sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.', 
            'image' => '/assets/images/team_02.jpg'
        ],
        [
            'title' => 'Paul Walker', 
            'little_title' => 'Financial Analyst',
            'content' => 'In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.', 
            'image' => '/assets/images/team_03.jpg'
        ]
    ]);
    }
}

