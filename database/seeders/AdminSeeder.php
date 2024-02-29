<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $user = User::create ([
            'name' => 'Admin',
            'email' => 'moid@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$12$6gsv77POik7EmsPGuaIT.e3BEI3Nav/5Pf5EGW4DHYOdmblsm25cO', // password
            
        ]); 
        $user->assignRole('admin');  

    }
}
