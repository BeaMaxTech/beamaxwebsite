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
            $table->string('fullname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_id')->nullable();

            $table->string('role')->default("student");
            $table->integer('role_id')->default("1");
            $table->string('courses')->nullable();
            $table->integer('num_courses')->nullable();
            
            $table->double('total_amount')->nullable();
            $table->string('phone')->nullable();
            $table->string('guidiance_name')->nullable();
            $table->string('guidiance_phone')->nullable();
            
            $table->string('registered_by')->nullable();
            $table->string('advert_method')->nullable();
            
            $table->string('address')->nullable();
            $table->double('salary')->nullable();
            $table->string('job_title')->nullable();

            $table->string('password');
            $table->rememberToken();
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
