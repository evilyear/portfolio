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
        Schema::create('employment_history_translations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId("employment_history_id")->unsigned();
            $table->string("locale")->index();
            $table->unique(['employment_history_id', 'locale'], 'emp_hist_trans_emp_hist_id_loc_unq');
            $table->text("title");
            $table->text("text");


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_translations');
    }
};
