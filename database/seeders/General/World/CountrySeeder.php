<?php

namespace Database\Seeders\General\World;

use App\Models\General\World\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    public function run()
    {
        Country::insert([
            [
                'name'=>'Egypt',
                'code'=>'EGY',
                'short'=>'EGY'
            ]
        ]);
    }
}
