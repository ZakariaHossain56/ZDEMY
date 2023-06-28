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
        Schema::dropIfExists('all_courses');
        Schema::create('all_courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('tags');
            $table->string('icon')->nullable();
            $table->string('url');
            $table->text('description');
            $table->float('rating')->default(0.0);
            $table->integer('enrolled')->default(0);
            $table->integer('author_id')->nullable();
            $table->string('author')->nullable();
            $table->foreign('author_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_courses');
    }
};
