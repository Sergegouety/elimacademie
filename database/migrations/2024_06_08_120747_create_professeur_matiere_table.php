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
        Schema::create('professeur_matiere', function (Blueprint $table) {
            $table->id();
            $table->integer('professeur_id')->nullable()->constrained('professeurs');
            $table->integer('matiere_id')->nullable()->constrained('matieres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professeur_matiere');
    }
};
