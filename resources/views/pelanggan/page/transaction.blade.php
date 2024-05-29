<!-- ini artinya file ini akan di panggil/digunakan di dalam file index, sesuai path yang ada di bawah ini  -->
@extends('pelanggan.layout.index')

<!-- ini isi konten yang akan di buat / di tampilkan ke user -->
@section('content')
<style>
 input[type="number"]::-webkit-inner-spin-button,
 input[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0
 }
</style>

<h4 class="mt-4"> Shopping Cart </h4>
<div class="card mb-3">
 <div class="card-body d-flex gap-4">
  <img src="{{asset('assets/images/baju.jpeg')}}" alt="">
  <div class="description w-100">
   <p class="mt-2 mb-0" style="font-size: 25px;"><b>Polo Cotton</b></p>
   <input type="number" class="form-control border-0 fs-1" id="harga" value="550000" disabled>
   <div class="row">
    <label for="quantity" class="col-sm-2 col-form-label fs-5">Quantity</label>
    <div class="col-sm-5 d-flex">
     <button class="rounded-start bg-emerald-300 p-2 border border-0" id="plus">+</button>
     <input type="number" name="quantity" class="form-control w-25 text-center" id="quantity" min="0" max="999" value="1">
     <button class="rounded-end bg-emerald-300 p-2" id="minus" disabled>-</button>
    </div>
   </div>
   <div class="row">
    <label for="total" class="col-sm-2 fs-5"> Amount </label>
    <input type="text" class="col-sm-5 form-control w-25 mt-2 text-center" readonly id="total" name="amount">
   </div>

   <div class="row w-50 my-3 gap-2">
    <a href="/checkout" class="btn btn-primary col-lg-4">
     <i class="fa-brands fa-shopify"></i> Checkout
    </a>
    <button class="btn btn-danger col-lg-4">
     <i class="fa-solid fa-trash"></i> Delete
    </button>
   </div>

  </div>
 </div>
</div>

@endsection
