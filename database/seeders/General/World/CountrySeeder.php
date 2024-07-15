<?php

namespace Database\Seeders\General\World;

use App\Models\General\World\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        Country::insert([
            [
                'name'=>'Egypt',
                'code'=>'EGY',
                'short'=>'EGY',
                'iso_code'=>'EG-EGY-818',
            ],
            [
                'name'=>'Saudi Arabia',
                'code'=>'SAU',
                'short'=>'SAU',
                'iso_code'=>'SA-SAU-682'
            ],
        ]);
    }
}
