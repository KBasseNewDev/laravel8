<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImputationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('imputations', function (Blueprint $table) {
            $table->bigIncrements('idImputation');
            $table->date('dateImputation');
            $table->timestamps();
            $table->unsignedBigInteger('idSalaire');
            $table->foreign('idSalaire')
            ->references('idSalaire')
            ->on('salaires')
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
        Schema::dropIfExists('imputations');
    }
}
