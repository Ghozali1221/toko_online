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
   $table->string('username');
   $table->string('email')->unique();
   $table->timestamp('email_verified_at')->nullable();
   $table->string('address', 100)->nullable();
   $table->string('password');
   $table->integer('telepon')->nullable();
   $table->date('tgl_lahir');
   $table->string('image')->default('default.png');
   $table->integer('is_admin')->default(1);
   $table->boolean('is_member')->default(1);
   $table->boolean('is_active')->default(1);
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
