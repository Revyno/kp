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
        Schema::create('programs', function (Blueprint $table) {
           $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('level'); // beginner, intermediate, advanced
            $table->integer('duration_weeks');
            $table->integer('sessions_per_week');
            $table->integer('duration_per_session'); // in minutes
            $table->decimal('price', 10, 2);
            $table->integer('max_participants');
            $table->string('image')->nullable();
            $table->json('features')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
