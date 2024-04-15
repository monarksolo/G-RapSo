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
        Schema::create('rapports', function (Blueprint $table) {
            $table->id();
            $table->string('resume');
            $table->string('objectif');
            $table->string('methodologie');
            $table->string('resultat');
            $table->string('conclusion');
            $table->timestamps();
            $table->foreignId('projet_id')->constrained();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rapports', function(Blueprint $table){
            $table->dropForeign("rapport_id");
        });
        Schema::dropIfExists('rapports');
    }
};
