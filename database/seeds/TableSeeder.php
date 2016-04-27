<?php

use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->truncate();
        \DB::table('tvs')->truncate();

        factory(App\User::class)->create([
            'name' => 'Administrator',
            'nickname' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('s3cr3t'),
            'type' => 'admin',
            'remember_token' => str_random(10)
        ]);

        factory(App\Tv::class, 69)->create();
    }
}
