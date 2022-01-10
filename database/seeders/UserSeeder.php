<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Aydın',
            'email' => 'akobey@gmail.com',
            'password' => bcrypt('akobey751075'),
        ]);

        User::create([
            'name' => 'Pala',
            'email' => 'palaremz@gmail.com',
            'password' => bcrypt('pala751075'),
        ]);


        User::create([
            'name' => 'Ali',
            'email' => 'ali@gmail.com',
            'password' => bcrypt('ali751075'),
        ]);
    }
}
