<!-- ini artinya file ini akan di panggil/digunakan di dalam file index, sesuai path yang ada di bawah ini  -->
@extends('pelanggan.layout.index')

<!-- ini isi konten yang akan di buat / di tampilkan ke user -->
@section('content')
<h4 class="mt-4"> Shopping Cart </h4>

<div class="card">
 <div class="card-body d-flex flex-wrap gap-3">
  <img src="{{asset('assets/images/baju.jpeg')}}" alt="">
  <div class="description">
   <p class="mt-2 mb-0" style="font-size: 25px;"><b>Polo Cotton</b></p>
   <h5>Rp 241.000</h5>
   <p>Quantity</p>
   <div class="d-flex">
    <button class="rounded-start bg-emerald-300 p-2" id="plus">+</button>
    <input type="number" name="quantity" class="form-control w-50 text-center" id="quantity" min="0" max="999" value="1">
    <button class="rounded-end bg-emerald-300 p-2" id="minus">-</button>
   </div>
   </p>
  </div>
 </div>
</div>

@endsection