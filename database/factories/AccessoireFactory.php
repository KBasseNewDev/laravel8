<?php

namespace Database\Factories;

use App\Models\Accessoire;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccessoireFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Accessoire::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomAccessoire' => $this->faker->nomAccessoire(),
            'montantAccessoire' => $this->faker->montantAccessoire(),
            'typeAccessoire' => $this->faker->typeAccessoire(),
        ];
    }
}
