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
        Schema::create('observations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("description", 100);
            $table->foreignId("owner")->nullable();
            $table->foreign('owner')
                        ->references('id')
                        ->on('users')
                        ->cascadeOnUpdate()
                        ->nullOnDelete();
            $table->foreignId("computer")->nullable();
            $table->foreign('computer')
                        ->references('id')
                        ->on('computers')
                        ->cascadeOnUpdate()
                        ->nullOnDelete();
            $table->foreignId("category")->nullable();
            $table->foreign('category')
                        ->references('id')
                        ->on('categories')
                        ->cascadeOnUpdate()
                        ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('observations');
    }
};

