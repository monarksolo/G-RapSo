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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('description');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('membres_equipe');
            $table->timestamps();
            $table->foreignId('suivi_id');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projets', function(Blueprint $table){
            $table->dropForeign("suivi_id");
        });
        Schema::dropIfExists('projets');
    }
};
