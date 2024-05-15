<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $user = [
            [
                
               'name'=>'Admin',
               'email'=>'admin@example.com',
                'role'=>'admin',
               'password'=> bcrypt('123456'),
            ],
            [
                
               'name'=>'pegawai',
               'email'=>'pegawai@example.com',
                'role'=>'pegawai',
               'password'=> bcrypt('123456'),
            ],
        ];
        foreach ($user as $key => $value){
            User::create($value);
        }
    }
    }


