<?php

use Illuminate\Database\Seeder;
use App\Location;
use App\Category;

class LocationAndCategoryDbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = ['town','lurambi','juakali','kefinco','maraba','amalemba','kotecha','scheme','joyland','star annex'];
        $categories = ['hostel','single room','double room','self container','single bedroom','two bedroom'];
        $faker = \Faker\Factory::create();

        foreach($locations as $locate){
            Location::create(['locationName' => $locate]);
        }
        foreach($categories as $cat){
            Category::create(['categoryName' => $cat]);
        }
    }
}
