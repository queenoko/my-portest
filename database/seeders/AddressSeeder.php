<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i < 50; $i++) { 
            DB::table('addresses')->insert([
                'address' => Str::random(20),
                'user_id' => 1
            ]);
        }
    }
}
