<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
 use HasFactory;
 protected $fillable = [
  'sku',
  'nama_produk',
  'tipe',
  'category',
  'harga',
  'foto',
  'discount',
  'quantity',
  'is_active'
 ];

 protected $hidden;
}
