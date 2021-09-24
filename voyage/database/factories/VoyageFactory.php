<?php

namespace Database\Factories;

use App\Models\Voyage;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoyageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Voyage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'destination' => $this->faker->word . ' - ' . $this->faker->word,
            'description' => $this->faker->text,
            'date' => $this->faker->date($format = 'Y-m-d'),
            'cost' => $this->faker->numberBetween($min = 50, $max = 2000),
            'organizer' => $this->faker->name
        ];
    }
}
