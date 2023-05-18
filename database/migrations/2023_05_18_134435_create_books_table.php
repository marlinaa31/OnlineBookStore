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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->integer('total_page')->nullable();
            $table->string('author')->nullable();
            $table->string('publisher')->nullable();
            $table->date('publication_date')->nullable();
            $table->float('weight')->nullable();
            $table->string('ISBN')->nullable();
            $table->string('language')->nullable();
            $table->float('width')->nullable();
            $table->float('height')->nullable();
            $table->integer('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
