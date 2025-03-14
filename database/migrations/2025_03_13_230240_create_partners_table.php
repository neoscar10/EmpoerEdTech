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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the partner (individual or organization)
            $table->enum('type', ['individual', 'organization']); // Type of partnership
            $table->string('email')->unique(); // Email address
            $table->string('phone')->nullable(); // Contact phone number
            $table->string('website')->nullable(); // Website (for organizations)
            $table->text('address')->nullable(); // Address details
            $table->text('description')->nullable(); // Brief about the partner
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
