<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('attributs', function (Blueprint $table) {
            $table->bigIncrements('idAttribut');
            $table->date('dateAttribut');
            $table->timestamps();
            $table->unsignedBigInteger('idGrade');
            $table->foreign('idGrade')
            ->references('idGrade')
            ->on('grades')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('idAccessoire');
            $table->foreign('idAccessoire')
            ->references('idAccessoire')
            ->on('accessoires')
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
        Schema::dropIfExists('attributs');
    }
}
