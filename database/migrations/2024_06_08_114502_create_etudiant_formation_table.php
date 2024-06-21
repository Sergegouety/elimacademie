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
        Schema::create('etudiant_formation', function (Blueprint $table) {
            $table->id();
            $table->integer('etudiant_id')->nullable()->constrained('etudiants');
            $table->integer('formation_id')->nullable()->constrained('formation');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiant_formation');
    }
};
