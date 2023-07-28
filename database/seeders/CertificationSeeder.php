<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 8; $i++) { 
            $data = [
                'certification_name' => 'Certification '.$i,
                'certification_picture' => 'certification.png'
            ];
            DB::table('certifications')->insert($data);
        }

    }
}
