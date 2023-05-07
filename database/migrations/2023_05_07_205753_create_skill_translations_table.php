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
        Schema::create('skill_translations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId("skill_id")->unsigned();
            $table->string("locale")->index();
            $table->unique(["skill_id", "locale"]);

            $table->text("title");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skill_translations');
    }
};
