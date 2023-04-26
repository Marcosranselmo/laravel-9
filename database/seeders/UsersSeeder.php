<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Marcos Roberto Anselmo',
            'email' => 'marcos.anselmo@hotmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
