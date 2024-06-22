<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nkc_statistiques', function (Blueprint $table) {
            $table->id();
            $table->integer('Annee');
            $table->integer('ISCAE'); // Shortened name for 'Institut Supérieur de Comptabilité et d'Administration des Entreprises'
            $table->integer('IUP'); // Shortened name for 'UNA - Institut Universitaire Professionnel (IUP)'
            $table->integer('SupNum'); // Shortened name for 'Institut Supérieur du Numérique (SupNum)'
            $table->integer('UNA_FST'); // Shortened name for 'UNA - Faculté des Sciences et Techniques (FST)'
            $table->integer('UNA_FLSH'); // Shortened name for 'UNA - Faculté des lettres et sciences humaines (FLSH)'
            $table->integer('UNA_FM'); // Shortened name for 'UNA - Faculté de médecine (FM)'
            $table->integer('UNA_FSJE'); // Shortened name for 'UNA - Faculté des sciences juridiques et économiques (FSJE)'
            $table->integer('ESP');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nkc_statistiques');
    }
};
