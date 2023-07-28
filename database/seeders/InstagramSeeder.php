<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstagramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 8; $i++) { 
            $data = [
                'instagram_name' => 'Instagram '.$i,
                'instagram_link' => 'https://www.insragram.com/nexpac.id',
                'instagram_picture' => 'instagram.png'
            ];
            DB::table('instagram_contents')->insert($data);
        }
    }
}
