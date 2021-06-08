<?php

namespace Database\Factories;

use App\Models\Banque;
use Illuminate\Database\Eloquent\Factories\Factory;

class BanqueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Banque::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomBanque' => $this->faker->nomBanque(),
            'villeBanque' => $this->faker->villeBanque(),
            'rueBanque' => $this->faker->rueBanque(),
            'codeBanque' => $this->faker->codeBanque(),
        ];
    }
}
