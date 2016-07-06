<?php

use Illuminate\Database\Seeder;
use App\Property;
use App\Category;
use App\Location;
use App\Owner;

class PropertyDBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        foreach(range(1,30) as $index){
            $property = new Property([
                'name' => $faker->sentence(3)." ".Location::find(rand(1,Location::count()))->locationName,
                'price' => rand(15, 200) * 100,
                'description' => $faker->sentence(15),
                'location_id' => Location::find(rand(1,Location::count()))->id,
                'category_id' => Category::find(rand(1,Category::count()))->id
            ]);

            $owner = Owner::find(rand(1, Owner::count()));
            $owner->properties()->save($property);
        }

    }
}
