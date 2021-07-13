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
            $table->bigIncrements('id');
            $table->string('periodeSalaire')->default('0-0-0');
            $table->unsignedInteger('baseSalaire')->default(0);
            $table->unsignedInteger('tauxSalaire')->default(0);
            $table->unsignedInteger('heureSup')->default(0);
            $table->unsignedInteger('gainSalaire')->default(0);
            $table->unsignedInteger('retenueSalaire')->default(0);
            $table->unsignedInteger('chargeSalaire')->default(0);
            $table->unsignedInteger('salaireBrute')->default(0);
            $table->unsignedInteger('netImposable')->default(0);
            $table->string('avantageNature')->default('');
            $table->unsignedInteger('netPayer')->default(0);
            $table->timestamps();
            $table->unsignedBigInteger('employe_id');
            $table->foreign('employe_id')
            ->references('id')
            ->on('employes')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
