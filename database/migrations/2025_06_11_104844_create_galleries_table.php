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
        Schema::create('galleries', function (Blueprint $table) {
         $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('type'); // photo, video
            $table->string('file_path');
            $table->string('thumbnail_path')->nullable();
            $table->json('tags')->nullable();
            $table->date('taken_date')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_public')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
