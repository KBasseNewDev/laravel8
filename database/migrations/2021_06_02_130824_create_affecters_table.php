<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffectersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('affecters', function (Blueprint $table) {
            $table->bigIncrements('idAffecter');
            $table->date('dateDebutAffecter');
            $table->date('dateFinAffecter');
            $table->timestamps();
            $table->unsignedBigInteger('idService');
            $table->foreign('idService')
            ->references('idService')
            ->on('services')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('employe_id');
            $table->foreign('employe_id')
            ->references('id')
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
        Schema::dropIfExists('affecters');
    }
}
