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
        Schema::create('language_translations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId("language_id")->unsigned();
            $table->string("locale")->index();
            $table->unique(["language_id", "locale"]);

            $table->text("title");
            $table->text("text");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('language_translations');
    }
};
