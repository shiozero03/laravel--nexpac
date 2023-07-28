<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'application_picture' => 'aseptic-1.png',
                'application_name' => 'COCONUT CREAM',
                'application_spec' => 'Kemasan Segitiga',
                'application_about' => null,
                'application_category' => 'Aseptic Packaging'
            ],
            [
                'application_picture' => 'aseptic-2.png',
                'application_name' => 'MILK',
                'application_spec' => 'Kemasan Kotak 125ml - 250ml',
                'application_about' => null,
                'application_category' => 'Aseptic Packaging'
            ],
            [
                'application_picture' => 'aseptic-3.png',
                'application_name' => 'TEA',
                'application_spec' => 'Kemasan Kotak 125ml - 250ml',
                'application_about' => null,
                'application_category' => 'Aseptic Packaging'
            ],
            [
                'application_picture' => 'aseptic-4.png',
                'application_name' => 'JUICE',
                'application_spec' => 'Kemasan Kotak 125ml - 250ml',
                'application_about' => null,
                'application_category' => 'Aseptic Packaging'
            ],
            [
                'application_picture' => 'paper-1.png',
                'application_name' => 'WARM FOOD',
                'application_spec' => null,
                'application_about' => 'Paper packaging is heat resistance to the freshly cook food. This advantage allows you to eat food while it is still warm. Nexpac use aseptic standards for packaging lamination so that you can immediately consume food in a warm state.',
                'application_category' => 'Paper Packaging'
            ],
            [
                'application_picture' => 'paper-2.png',
                'application_name' => 'MICROWAVE SAFE',
                'application_spec' => null,
                'application_about' => 'The heat-retaining of the paper allow you to warm the food in the microwave. Nexpac is microwaveable food packaging.',
                'application_category' => 'Paper Packaging'
            ],
            [
                'application_picture' => 'paper-3.png',
                'application_name' => 'COLD DRINK OR ICE CREAM',
                'application_spec' => null,
                'application_about' => 'Paper Cup Packaging is simple and easy to carry. Nexpac Paper cups in addition for cold drinks can also be used for ice cream and prevent flavor changes because of wet packaging.',
                'application_category' => 'Paper Packaging'
            ],
            [
                'application_picture' => 'paper-4.png',
                'application_name' => 'HOT DRINK OR SOUPY FOOD',
                'application_spec' => null,
                'application_about' => 'The heat-resistant of nexpac packaging can make easier to pack hot coffee and also soupy foods.',
                'application_category' => 'Paper Packaging'
            ],
        ];
        DB::table('applications')->insert($data);
    }
}
