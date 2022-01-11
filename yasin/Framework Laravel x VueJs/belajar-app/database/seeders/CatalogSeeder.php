<?php

namespace Database\Seeders;

use App\Models\Catalog;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Faker::create();

        for ($i=0; $i<7; $i++){
            $catalog = New Catalog;

            $catalog->name = 'Buku '.$faker->word ;

            $catalog->save();
        }
    }
}
