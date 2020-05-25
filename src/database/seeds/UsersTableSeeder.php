<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Initialize
        DB::table('users')->delete();

        # Insert Test Data
        DB::table('users')->insert([
            [
            'name' => 'user1',
            'email' => 'user1@example.com',
            
            # Login with [secret]
            'password' => Hash::make('secret'),

            # Options
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
