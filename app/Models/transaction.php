<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
 use HasFactory;
 protected $fillable = [
  'code_transaction',
  'sku_transaction',
  'nm_penerima',
  'alamat_penerima',
  'telp_penerima',
  'total_qty',
  'total_harga',
  'nm_ekspedisi'
 ];

 protected $hidden;
}
