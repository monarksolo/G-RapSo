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
        Schema::create('gerers', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->foreignId('projet_id');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gerers', function(Blueprint $table){
            $table->dropForeign(["user_id", "projet_id"]);
        });
        Schema::dropIfExists('gerers');
    }
};
