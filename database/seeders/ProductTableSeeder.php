<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'image' => 'https://image.api.playstation.com/vulcan/img/rnd/202011/0204/zAWbcWQcCma0UuZ8hz5swYMp.png',
            'title' => 'Tekken 7',
            'description' => 'Beleef het epische einde van de Mishima-clan en ontdek de redenen achter elke stap van hun eindeloze strijd. TEKKEN 7, aangedreven door de Unreal Engine 4, biedt dankzij innovatieve vechtmechanismen spannende filmische gevechten met een verhaal en intense duels waar je zowel met vrienden als rivalen van kunt genieten.',
            'price' => 19.99,
            'weight' => 1500
        ]);

        DB::table('products')->insert([
            'image' => 'https://store-images.s-microsoft.com/image/apps.49406.68198160262253230.0535a51b-539d-4920-87d3-bc2c770b3ff3.6460abb9-9631-46db-971c-c72169dbdeb7?mode=scale&q=90&h=1080&w=1920&format=jpg',
            'title' => 'Tekken Tag Tournament 2',
            'description' => 'Voeg 2 nieuwe personages toe - Angel en Michelle - een extra stage en speciale items zoals de Big Bikini Bundle en de speciale Lili-rok en til je TEKKEN-ervaring naar een hoger niveau!',
            'price' => 19.99,
            'weight' => 1500
        ]);

        DB::table('products')->insert([
            'image' => 'https://store-images.s-microsoft.com/image/apps.34940.71725309066492610.4166ad7f-bf33-41ee-9868-6009a80bac53.267805cc-5621-41ec-8b5a-7bf1b2d9de61?mode=scale&q=90&h=1080&w=1920',
            'title' => 'Tekken 6',
            'description' => 'With over 34 million copies sold worldwide, TEKKEN is the #1 fighting game franchise.　The series appears on the Xbox 360 console for the first time with the latest installment, TEKKEN 6!　A large roster of unique characters, fast-paced action, a deep level of strategy, and the rich background story have all helped make the TEKKEN series the top in its genre.TEKKEN 6 has the largest character roster to date, Online VS Battle, and other new content created for the home version.',
            'price' => 19.99,
            'weight' => 1500
        ]);

        DB::table('products')->insert([
            'image' => 'https://upload.wikimedia.org/wikipedia/en/a/ad/Tekken5Cover.jpg',
            'title' => 'Tekken 5',
            'description' => 'Beleef het epische einde van de Mishima-clan en ontdek de redenen achter elke stap van hun eindeloze strijd. TEKKEN 7, aangedreven door de Unreal Engine 4, biedt dankzij innovatieve vechtmechanismen spannende filmische gevechten met een verhaal en intense duels waar je zowel met vrienden als rivalen van kunt genieten.',
            'price' => 19.99,
            'weight' => 1500
        ]);
    }
}
