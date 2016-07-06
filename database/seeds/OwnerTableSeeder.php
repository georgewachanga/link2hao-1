<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Owner;
use App\Location;

class OwnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        foreach(range(1,10) as $index){
            $owner = new Owner([
                'phone' => $faker->phoneNumber,
                'idno' => $faker->randomNumber(8),
                'location' => Location::find(rand(1,20))->locationName,
            ]);
            $owner->save();
            $user = User::find(rand(40,60));
            $owner->user()->save($user);


        }


    }
}
