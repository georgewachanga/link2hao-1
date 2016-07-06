<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        //$this->call(LocationAndCategoryDbSeeder::class);
        //$this->call(PropertyDBSeeder::class);
        //$this->call(OwnerTableSeeder::class);
        $this->call(PropertyDBSeeder::class);
    }
}
