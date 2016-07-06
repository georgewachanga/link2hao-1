<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        foreach(range(1,30) as $index)
        {
            $user = new User([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'email' => $faker->email,
                'password' => $faker->password,
            ]);
            $user->save();
            print "[+] Successfully added ".$user->fname." \n";

        }
    }
}
