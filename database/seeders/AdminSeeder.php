<?php 

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->insert([
            'email' => 'admin@bizhubindia.com',
            'password' => 'securepassword123',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
