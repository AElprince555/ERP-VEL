<?php

namespace Database\Factories\General\World;

use App\Models\General\World\State;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class StateFactory extends Factory{
    protected $model = State::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),//
'updated_at' => Carbon::now(),
'name' => $this->faker->name(),
'code' => $this->faker->word(),
'short' => $this->faker->word(),
'iso_code' => $this->faker->word(),
'country_id' => $this->faker->randomNumber(),
        ];
    }
}
