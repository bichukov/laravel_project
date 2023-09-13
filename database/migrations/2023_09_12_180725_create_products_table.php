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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('section_id')->nullable();
            $table->boolean('is_active')->default(1);
            $table->string('title');
            $table->string('articles')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('composition')->nullable();
            $table->integer('price');
            $table->integer('sale_price')->nullable();
            $table->string('image');
            $table->boolean('popular')->default(0);


            $table->timestamps();

            $table->foreign('section_id')->references('id')->on('sections')->nullOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
