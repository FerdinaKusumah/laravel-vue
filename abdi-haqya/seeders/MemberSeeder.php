<?php

namespace Database\Seeders;

use App\Models\Member;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,20) as $member) {
            // Returns always random genders according to the name, inclusive mixed!!
            $gender = $faker->randomElement($array = array('m','f'));

            DB::table('members')->insert([
                'name' => $faker->name($gender),
                'gender' => $gender,
                'email' => $faker->unique()->safeEmail,
                'address' => $faker->address,
                'phone_number' => '0821'.$faker->randomNumber(8),
            ]);
        }
    }
}
