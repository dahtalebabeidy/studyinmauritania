<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('universites', function (Blueprint $table) {
            $table->id();
            $table->string('NomUniversite');
            $table->string('Ville');
            $table->text('Description')->nullable();
            $table->mediumText('Imag')->nullable();
            $table->unsignedBigInteger('ville_id');
            $table->timestamps();

            $table->foreign('ville_id')->references('id')->on('villes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('universites');
    }
};
