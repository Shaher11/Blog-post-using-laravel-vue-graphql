<?php
namespace Database\Factories;
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          \App\Models\User::factory(10)->create()->each(function($user){

            $user->posts()->save('App\Models\Post')->make();
        });
    }
}