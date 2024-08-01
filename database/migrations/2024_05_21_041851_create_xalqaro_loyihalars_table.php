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
        Schema::create('xalqaro_loyihalars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('loyih_name');
            $table->string('loyiha_raqami');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('lavozimi');
            $table->string('start_user_date');
            $table->string('end_user_date');
            $table->string('file');
            $table->string('categoriy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('xalqaro_loyihalars');
    }
};
