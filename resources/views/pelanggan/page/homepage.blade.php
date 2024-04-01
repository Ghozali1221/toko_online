<!-- ini artinya file ini akan di panggil/digunakan di dalam file index, sesuai path yang ada di bawah ini  -->
@extends('pelanggan.layout.index')

<!-- ini isi konten yang akan di buat / di tampilkan ke user -->
<!-- start section content -->
@section('content')

<h4 class="mt-3">BEST SELLER</h4>

<div class="konten mt-3 d-flex flex-lg-wrap gap-4">
 <div class="card" style="inline-size: 230px;">
  <div class="card-header m-auto" style="border-radius: 5px;">
   <img src="{{asset('assets/images/baju.png')}}" alt="baju A" style="inline-size: 100%;">
  </div>
  <div class="card-body">
   <p class="m-0 text-justify">Baju kulit pria dewasa</p>
   <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
  </div>
  <div class="card-footer d-flex flex-row justify-content-between align-items-center">
   <p class="m-0" style="font-size: 16px;">Rp 245.000,-</p>
   <button class="btn btn-outline-primary" style="font-size: 15px;">
    <i class="fa-solid fa-cart-plus"></i> add item
   </button>
  </div>
 </div>

 <div class="card" style="inline-size: 230px;">
  <div class="card-header m-auto" style="border-radius: 5px;">
   <img src="{{asset('assets/images/baju.png')}}" alt="baju A" style="inline-size: 100%;">
  </div>
  <div class="card-body">
   <p class="m-0 text-justify">Baju kulit pria dewasa</p>
   <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
  </div>
  <div class="card-footer d-flex flex-row justify-content-between align-items-center">
   <p class="m-0" style="font-size: 16px;">Rp 245.000,-</p>
   <button class="btn btn-outline-primary" style="font-size: 15px;">
    <i class="fa-solid fa-cart-plus"></i> add item
   </button>
  </div>
 </div>

 <div class="card" style="inline-size: 230px;">
  <div class="card-header m-auto" style="border-radius: 5px;">
   <img src="{{asset('assets/images/baju.png')}}" alt="baju A" style="inline-size: 100%;">
  </div>
  <div class="card-body">
   <p class="m-0 text-justify">Baju kulit pria dewasa</p>
   <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
  </div>
  <div class="card-footer d-flex flex-row justify-content-between align-items-center">
   <p class="m-0" style="font-size: 16px;">Rp 245.000,-</p>
   <button class="btn btn-outline-primary" style="font-size: 15px;">
    <i class="fa-solid fa-cart-plus"></i> add item
   </button>
  </div>
 </div>

 <div class="card" style="inline-size: 230px;">
  <div class="card-header m-auto" style="border-radius: 5px;">
   <img src="{{asset('assets/images/baju.png')}}" alt="baju A" style="inline-size: 100%;">
  </div>
  <div class="card-body">
   <p class="m-0 text-justify">Baju kulit pria dewasa</p>
   <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
  </div>
  <div class="card-footer d-flex flex-row justify-content-between align-items-center">
   <p class="m-0" style="font-size: 16px;">Rp 245.000,-</p>
   <button class="btn btn-outline-primary" style="font-size: 15px;">
    <i class="fa-solid fa-cart-plus"></i> add item
   </button>
  </div>
 </div>

 <h4 class="mt-1">NEW PRODUCT</h4>

 <div class="konten mt-1 d-flex flex-lg-wrap gap-4 mb-4">
  <div class="card" style="inline-size: 230px;">
   <div class="card-header m-auto" style="border-radius: 5px;">
    <img src="{{asset('assets/images/baju.png')}}" alt="baju A" style="inline-size: 100%;">
   </div>
   <div class="card-body">
    <p class="m-0 text-justify">Baju kulit pria dewasa</p>
    <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
   </div>
   <div class="card-footer d-flex flex-row justify-content-between align-items-center">
    <p class="m-0" style="font-size: 16px;">Rp 245.000,-</p>
    <button class="btn btn-outline-primary" style="font-size: 15px;">
     <i class="fa-solid fa-cart-plus"></i> add item
    </button>
   </div>
  </div>

  <div class="card" style="inline-size: 230px;">
   <div class="card-header m-auto" style="border-radius: 5px;">
    <img src="{{asset('assets/images/baju.png')}}" alt="baju A" style="inline-size: 100%;">
   </div>
   <div class="card-body">
    <p class="m-0 text-justify">Baju kulit pria dewasa</p>
    <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
   </div>
   <div class="card-footer d-flex flex-row justify-content-between align-items-center">
    <p class="m-0" style="font-size: 16px;">Rp 245.000,-</p>
    <button class="btn btn-outline-primary" style="font-size: 15px;">
     <i class="fa-solid fa-cart-plus"></i> add item
    </button>
   </div>
  </div>

  <div class="card" style="inline-size: 230px;">
   <div class="card-header m-auto" style="border-radius: 5px;">
    <img src="{{asset('assets/images/baju.png')}}" alt="baju A" style="inline-size: 100%;">
   </div>
   <div class="card-body">
    <p class="m-0 text-justify">Baju kulit pria dewasa</p>
    <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
   </div>
   <div class="card-footer d-flex flex-row justify-content-between align-items-center">
    <p class="m-0" style="font-size: 16px;">Rp 245.000,-</p>
    <button class="btn btn-outline-primary" style="font-size: 15px;">
     <i class="fa-solid fa-cart-plus"></i> add item
    </button>
   </div>
  </div>

  <div class="card" style="inline-size: 230px;">
   <div class="card-header m-auto" style="border-radius: 5px;">
    <img src="{{asset('assets/images/baju.png')}}" alt="baju A" style="inline-size: 100%;">
   </div>
   <div class="card-body">
    <p class="m-0 text-justify">Baju kulit pria dewasa</p>
    <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
   </div>
   <div class="card-footer d-flex flex-row justify-content-between align-items-center">
    <p class="m-0" style="font-size: 16px;">Rp 245.000,-</p>
    <button class="btn btn-outline-primary" style="font-size: 15px;">
     <i class="fa-solid fa-cart-plus"></i> add item
    </button>
   </div>
  </div>

 </div>
 @endsection
 <!-- end section content -->