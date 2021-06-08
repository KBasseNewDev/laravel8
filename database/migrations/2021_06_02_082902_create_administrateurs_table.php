<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrateurs', function (Blueprint $table) {
            $table->bigIncrements('idAdministrateur');
            $table->string('codeAdministrateur');
            $table->string('nomAdministrateur');
            $table->string('prenomAdministrateur');
            $table->date('dateNaissance');
            $table->unsignedInteger('telephoneAdministrateur')->unique();
            $table->string('matriculeAdministrateur');
            $table->string('roleAdministrateur');
            $table->string('emailAdministrateur')->unique();
            $table->timestamp('emailAdministrateur_verified_at')->nullable();
            $table->string('loginAdministrateur');
            $table->string('passwordAdministrateur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrateurs');
    }
}
