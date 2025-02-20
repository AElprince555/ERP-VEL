<?php

namespace Database\Factories\General\World;

use App\Models\General\World\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    protected $model = Country::class;

    public function definition(): array
    {
        return [
            'name'=>fake()->country,
            'code'=>fake()->countryCode,
            'iso_code'=>fake()->countryCode,
            'short'=>fake()->slug
        ];
    }
}
