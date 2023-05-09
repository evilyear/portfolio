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
        Schema::create('main_data_translations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId("main_data_id")->unsigned();
            $table->string("locale")->index();
            $table->unique(["main_data_id", "locale"]);

            $table->text("text");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_data_translations');
    }
};
