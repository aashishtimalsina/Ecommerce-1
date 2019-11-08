<?php

use App\Models\Admin;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Admin::create([
            'name'      =>  $faker->name,
            'email'     =>  'superadmin@admin.com',
            'password'  =>  bcrypt('password'),
            'role'      =>  'SuperAdmin',
        ]);

        Admin::create([
            'name'      =>  $faker->name,
            'email'     =>  'admin@admin.com',
            'password'  =>  bcrypt('password'),
            'role'      =>  'Admin',
        ]);


        Admin::create([
            'name'      =>  $faker->name,
            'email'     =>  'admin1@admin.com',
            'password'  =>  bcrypt('password'),
            'role'      =>  'Admin',
        ]);


        Admin::create([
            'name'      =>  $faker->name,
            'email'     =>  'ktm@ktm.com',
            'password'  =>  bcrypt('password'),
            'role'      =>  'User',
        ]);
    }
}
