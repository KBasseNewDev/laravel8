<?php

namespace Database\Factories;

use App\Models\Salaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalaireFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Salaire::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'etatSalaire' => $this->faker->etatSalaire(),
            'periodeSalaire' => $this->faker->periodeSalaire(),
            'baseSalaire' => $this->faker->baseSalaire(),
            'tauxSalaire' => $this->faker->tauxSalaire(),
            'gainSalaire' => $this->faker->gainSalaire(),
            'chargeSalaire' => $this->faker->chargeSalaire(),
        ];
    }
}
