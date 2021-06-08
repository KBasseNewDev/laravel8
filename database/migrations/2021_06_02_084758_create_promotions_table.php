<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('promotions', function (Blueprint $table) {
            $table->bigIncrements('idPromotion');
            $table->string('nomPromotion');
            $table->date('datePromotion');
            $table->timestamps();
            $table->unsignedBigInteger('idEmploye');
            $table->foreign('idEmploye')
            ->references('idEmploye')
            ->on('employes')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('idGrade');
            $table->foreign('idGrade')
            ->references('idGrade')
            ->on('grades')
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
        Schema::dropIfExists('promotions');
    }
}
