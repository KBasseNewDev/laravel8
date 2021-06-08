<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppartenirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('appartenirs', function (Blueprint $table) {
            $table->bigIncrements('idAppartenir');
            $table->date('dateAppartenir');
            $table->timestamps();
            $table->unsignedBigInteger('idGroupe');
            $table->foreign('idGroupe')
            ->references('idGroupe')
            ->on('groupes')
            ->onDelete('restrict')
            ->onUpdate('restrict');
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
        Schema::dropIfExists('appartenirs');
    }
}
