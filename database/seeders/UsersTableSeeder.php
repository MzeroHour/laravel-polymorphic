<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'project_id'=>1,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        User::create([
            'project_id'=>1,
            'name' => 'Mzero',
            'email' => 'myintzaw201@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        User::create([
            'project_id'=>1,
            'name' => 'PaungPaung',
            'email' => 'paungpaung111@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
          User::create([
            'project_id'=> 2,
            'name'=>'user 4',
            'email'=> 'user4@gmail.com',
            'password'=> Hash::make('password'),
        ]);
           User::create([
            'project_id'=> 2,
            'name'=>'user 5',
            'email'=> 'user5@gmail.com',
            'password'=> Hash::make('password'),

        ]);
    }
}
