<?php

namespace Database\Factories\General\World;

use App\Models\General\World\City;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CityFactory extends Factory{
    protected $model = City::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),//
'updated_at' => Carbon::now(),
'name' => $this->faker->name(),
'code' => $this->faker->word(),
'short' => $this->faker->word(),
'iso_code' => $this->faker->word(),
'state_id' => $this->faker->randomNumber(),
'country_id' => $this->faker->randomNumber(),
        ];
    }
}
