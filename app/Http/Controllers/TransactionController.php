<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
 public function index()
 {
  return view('pelanggan.page.transaction', ['title' => 'Transaction']);
 }

 public function checkout()
 {
  return view('pelanggan.page.CheckOut', ['title' => 'Checkout']);
 }
}
