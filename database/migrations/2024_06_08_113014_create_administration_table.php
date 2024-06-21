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
        Schema::create('administration', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable()->constrained('users');
            $table->timestamp('date_naissance')->nullable();
            $table->string('lieu_naissance')->nullable();
            $table->string('ville_id')->nullable();
            $table->string('nationalite')->nullable();
            $table->string('adresse')->nullable();
            $table->integer('niveau_scolaire_id')->nullable()->constrained('niveau_scolaire');
            $table->string('diplome_id')->nullable()->constrained('diplome');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administration');
    }
};
