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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');       // Column for first name
            $table->string('last_name');        // Column for last name
            $table->string('username')->unique();  // Unique column for username
            $table->string('email')->unique();     // Unique column for email
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            // Additional columns
            $table->string('phone_number')->nullable();     // Column for phone number
            $table->string('address')->nullable();          // Column for address
            $table->string('country')->nullable();          // Column for country
            $table->string('state')->nullable();            // Column for state/region
            $table->string('city')->nullable();             // Column for city/district
            $table->string('zip_code')->nullable();         // Column for ZIP code
            $table->string('office_phone')->nullable();     // Column for office phone number
            $table->string('organization')->nullable();     // Column for organization
            $table->string('profile_picture')->nullable();  // Column for profile picture URL

            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
