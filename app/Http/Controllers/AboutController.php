<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
 public function index()
 {
  return view('pelanggan.page.about', ['title' => 'About']);
 }
}
