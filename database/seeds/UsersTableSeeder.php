<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {


        factory(User::class, 10)->create();

    }
}
