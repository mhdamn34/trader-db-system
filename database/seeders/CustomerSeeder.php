<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'contact_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'company_name' => Str::random(10),
            'address' => Str::random(5),
            'city' => Str::random(10),
            'region' => Str::random(5),
            'postal_code' => Str::random(10),
            'country'=> Str::random(10),
            'phone'=> Str::random(10),
            'notes'=> Str::random(15),
        ]);
    }
}
