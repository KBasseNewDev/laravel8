<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReglementsalairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('reglementsalaires', function (Blueprint $table) {
            $table->bigIncrements('idReglementsalaire');
            $table->string('etatReglementsalaire');
            $table->date('dateReglementsalaire');
            $table->integer('montantReglementsalaire');
            $table->timestamps();
            $table->unsignedBigInteger('idSalaire');
            $table->foreign('idSalaire')
            ->references('idSalaire')
            ->on('salaires')
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
        Schema::dropIfExists('reglementsalaires');
    }
}
