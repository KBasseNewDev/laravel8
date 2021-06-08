<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employe;
use App\Models\Abonnement;
use App\Models\Accede;
use App\Models\Accessoire;
use App\Models\Administrateur;
use App\Models\Affecter;
use App\Models\Appartenir;
use App\Models\Attribut;
use App\Models\Banque;
use App\Models\Grade;
use App\Models\Groupe;
use App\Models\Imputation;
use App\Models\Menu;
use App\Models\Prime;
use App\Models\Promotion;
use App\Models\Reglementsalaire;
use App\Models\Retenue;
use App\Models\Salaire;
use App\Models\Service;
use App\Models\User;
use Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create;
        \App\Models\Employe::factory(10)->create;
        \App\Models\Accessoire::factory(10)->create;
        \App\Models\Banque::factory(10)->create;
        \App\Models\Grade::factory(10)->create;
        \App\Models\Groupe::factory(10)->create;
        \App\Models\Menu::factory(10)->create;
        \App\Models\Prime::factory(10)->create;
        \App\Models\Reglementsalaire::factory(10)->create;
        \App\Models\Retenue::factory(10)->create;
        \App\Models\Salaire::factory(10)->create;
        \App\Models\Service::factory(10)->create;
    }
}
