<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('nom_formation');
            $table->string('description');
            $table->string('durée');
            $table->integer('prix');
            $table->timestamps();
            $table->unsignedBigInteger('admin_id')->default(1);
            $table->foreign('admin_id')->references('id')->on('administrateurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formations');
    }
};
