<!-- ini artinya file ini akan di panggil/digunakan di dalam file index, sesuai path yang ada di bawah ini  -->
@extends('pelanggan.layout.index')

<!-- ini isi konten yang akan di buat / di tampilkan ke user -->
@section('content')
<div class="row mt-3">
 <div class="col-md-4">
  <div class="card" style="inline-size: 18rem;">
   <div class="card-header">
    Featured
   </div>
   <ul class="list-group list-group-flush">
    <li class="list-group-item">
     <a href="#" class="text-decoration-none">
      <i class="fa fa-plus none"></i> Pria
     </a>
    </li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
   </ul>
  </div>
 </div>

 <!-- start isi -->
 <div class="col-md-8 d-flex flex-wrap gap-3 mb-4">
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

  <!-- pagination -->
  <nav class="">
   <ul class="pagination">
    <li class="page-item disabled">
     <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
     <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
     <a class="page-link" href="#">Next</a>
    </li>
   </ul>
  </nav>

 </div>
 <!-- end isi -->

</div>
@endsection