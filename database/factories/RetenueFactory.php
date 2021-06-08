<?php

namespace Database\Factories;

use App\Models\Retenue;
use Illuminate\Database\Eloquent\Factories\Factory;

class RetenueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Retenue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomRetenue' => $this->faker->nomRetenue(),
            'montantRetenue' => $this->faker->montantRetenue(),
        ];
    }
}
