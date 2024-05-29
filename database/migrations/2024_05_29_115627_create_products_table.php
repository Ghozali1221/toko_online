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
   $table->string('sku');
   $table->string('nama_produk');
   $table->string('tipe');
   $table->string('category');
   $table->bigInteger('harga');
   $table->string('foto_produk');
   $table->float('discount');
   $table->integer('quantity');
   $table->boolean('is_active')->default(1);
   $table->timestamps();
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
