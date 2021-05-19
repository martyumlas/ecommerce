<?php

namespace Database\Seeders;

use App\Models\Admin;
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
        Admin::create([
            'name'      =>  'Marty Umlas',
            'email'     =>  'martyumlas@gmail.com',
            'password'  =>  bcrypt('password'),
        ]);
    }
}
