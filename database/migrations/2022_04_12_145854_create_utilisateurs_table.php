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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('age');
            $table->string('cin');
            $table->string('email');
            $table->string('formation')->default(null);
            $table->string('tel');
            $table->string('is_payer')->default(null);
            $table->string('niveau')->default(null);
            $table->string('profil');
            $table->string('description')->default(null);
            $table->unsignedBigInteger('admin_id')->default(1);
            $table->foreign('admin_id')->references('id')->on('administrateurs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
};
