<?php

namespace Database\Factories;

use App\Models\Employe;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomEmploye' => $this->faker->nomEmploye(),
            'prenomEmploye' => $this->faker->prenomEmploye(),
            'dateNaissanve' => $this->faker->dateNaissance(),
            'telephoneEmploye' => $this->faker->telephoneEmploye(),
            'matriculeEmploye' => $this->faker->matriculeEmploye(),
            'professionEmploye' => $this->faker->professionEmploye(),
            'villeEmploye' => $this->faker->villeEmploye(),
            'numerocnpsEmploye' => $this->faker->numerocnpsEmploye(),
            'situationMatrimonialeEmploye' => $this->faker->situationMatrimonialeEmploye(),
            'emailEmploye' => $this->faker->emailEmploye(),
        ];
    }
}
