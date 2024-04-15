<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\CommonMark\Node\Block\BlockQuote;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('effectuers', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->foreignId('suivi_id');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('effectuers', function(Blueprint $table){
            $table->dropForeign(["user_id", "suivi_id"]);
        });
        Schema::dropIfExists('effectuers');
    }
};
