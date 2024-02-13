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
            $table->string('name', 20);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('email')->unique();
            $table->string('surname', 20)->default(0);
            $table->char('code', 11)->unique()->default(0);


            $table->string('role', 20)->default('client');

            $table->rememberToken();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
