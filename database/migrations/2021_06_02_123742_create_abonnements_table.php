<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbonnementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('abonnements', function (Blueprint $table) {
            $table->bigIncrements('idAbonnement');
            $table->date('dateDebutAbonnement');
            $table->date('dateFinAbonnement');
            $table->unsignedInteger('numeroCompteAbonnement');
            $table->string('typeCompteAbonnement');
            $table->timestamps();
            $table->unsignedBigInteger('employe_id');
            $table->foreign('employe_id')
            ->references('id')
            ->on('employes')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('idBanque');
            $table->foreign('idBanque')
            ->references('idBanque')
            ->on('banques')
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
        Schema::dropIfExists('abonnements');
    }
}
