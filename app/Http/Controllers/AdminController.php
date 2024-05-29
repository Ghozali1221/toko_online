<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
 public function admin()
 {
  return view('admin.layout.index', ['title' => 'Dashboard ||| Admin']);
 }
}
