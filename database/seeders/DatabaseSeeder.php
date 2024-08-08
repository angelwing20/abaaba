<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\testing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        testing::create([
            'title'=>'laravel Senior Development',
            'tag'=>'laravel,javascript',
            'company'=>'Acme Corp',
            'location'=>'Malaysia',
            'email'=>'email@email.com',
            'website'=>'https://www.acme.com',
            'description'=>'hat first winter, it rains and rains as if we have moved to some foreign place, away from the desert; it rains and it rains, and the water comes up to the back step and I think it will enter the house'
        ]);

        testing::create([
            'title'=>'laravel Junior Development',
            'tag'=>'laravel,html',
            'company'=>'Acme Corp',
            'location'=>'England',
            'email'=>'email@email.com',
            'website'=>'https://www.acme.com',
            'description'=>'hat first winter, it rains and rains as if we have moved to some foreign place, away from the desert; it rains and it rains, and the water comes up to the back step and I think it will enter the house'
        ]);
    }
}
