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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('titulo');
            $table->string('logo')->nullable(); // caminho para logo
            $table->string('tags');
            $table->string('empresa');
            $table->string('Local');
            $table->string('email');
            $table->string('website');
            $table->longText('descricao');
            $table->timestamps();
        });
    }
    /**
     * foreignId - Create a new unsigned big integer (8-byte) column on the table
     * 
     * constrained - Create a foreign key constraint on this column referencing the "id" column of the conventionally related table
     * 
     */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
