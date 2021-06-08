<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('accedes', function (Blueprint $table) {
            $table->bigIncrements('idAccede');
            $table->string('nomAccede');
            $table->date('dateAccede');
            $table->timestamps();
            $table->unsignedBigInteger('idGroupe');
            $table->foreign('idGroupe')
            ->references('idGroupe')
            ->on('groupes')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('idMenu');
            $table->foreign('idMenu')
            ->references('idMenu')
            ->on('menus')
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
        Schema::dropIfExists('accedes');
    }
}
