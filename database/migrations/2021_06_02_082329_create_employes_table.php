<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->bigIncrements('idEmploye');
            $table->string('nomEmploye');
            $table->string('prenomEmploye');
            $table->date('dateNaissance');
            $table->integer('telephoneEmploye')->unique();
            $table->string('matriculeEmploye')->unique();
            $table->string('professionEmploye');
            $table->string('villeEmploye');
            $table->date('dateEmbauche');
            $table->string('situationMatrimonialeEmploye');
            $table->string('emailEmploye')->unique();
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
        Schema::dropIfExists('employes');
    }
}
