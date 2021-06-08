<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('salaires', function (Blueprint $table) {
            $table->bigIncrements('idSalaire');
            $table->string('etatSalaire');
            $table->string('periodeSalaire');
            $table->unsignedInteger('baseSalaire');
            $table->unsignedInteger('tauxSalaire');
            $table->unsignedInteger('gainSalaire');
            $table->unsignedInteger('chargeSalaire');
            $table->timestamps();
            $table->unsignedBigInteger('idEmploye');
            $table->foreign('idEmploye')
            ->references('idEmploye')
            ->on('employes')
            ->onDelete('restrict')
            ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaires');
    }
}
