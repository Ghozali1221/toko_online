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
  Schema::create('transactions', function (Blueprint $table) {
   $table->id();
   $table->string('code_transaction');
   $table->string('sku_transaction');
   $table->string('nm_penerima');
   $table->string('alamat_penerima');
   $table->integer('telp_penerima');
   $table->integer('total_qty');
   $table->integer('total_harga');
   $table->string('nm_ekspedisi');
   $table->timestamps();
  });
 }

 /**
  * Reverse the migrations.
  */
 public function down(): void
 {
  Schema::dropIfExists('transactions');
 }
};
