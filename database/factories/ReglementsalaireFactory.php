<?php

namespace Database\Factories;

use App\Models\Reglementsalaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReglementsalaireFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reglementsalaire::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'etatReglementsalaire' => $this->faker->etatReglementsalaire(),
            'dateReglementsalaire' => $this->faker->dateReglementsalaire(),
            'montantReglementsalaire' => $this->faker->montantReglementsalaire(),
        ];
    }
}
