<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
            'name'=>'Pablo Fernando',
            'lastname'=>'Mendieta Mayurí',
            'email'=>'mendieta182@hotmail.com',
            'status'=>1,
            'password'=>bcrypt('11111111'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ])->assignRole('Admin');

        for ($i = 1; $i < 50; $i++) {
                User::create([
                'name' => 'Test ' . $i,
                'lastname' => 'TestLastname ' . $i,
                'status'=>0,
                'email' => 'test' . $i . '@sge.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ])->assignRole('Guest');
        }
    }
}
