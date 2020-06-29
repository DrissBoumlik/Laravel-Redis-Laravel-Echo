<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class DatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'A-john doe',
            'email' => 'a@a.a',
            'email_verified_at' => now(),
            'password' => bcrypt('123'), // password
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'B-john doe',
            'email' => 'b@a.a',
            'email_verified_at' => now(),
            'password' => bcrypt('123'), // password
            'remember_token' => Str::random(10),
        ]);
        factory('App\Models\User', 5)->create();
        factory('App\Models\Category', 5)->create();

        factory('App\Models\Product', 20)->create();
        factory('App\Models\Order', 20)->create();

        factory('App\Models\OrderProduct', 100)->create();
    }
}
