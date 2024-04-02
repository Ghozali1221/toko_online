<!-- ini artinya file ini akan di panggil/digunakan di dalam file index, sesuai path yang ada di bawah ini  -->
@extends('pelanggan.layout.index')

<!-- ini isi konten yang akan di buat / di tampilkan ke user -->
@section('content')
<div class="row mt-3">
 <div class="col-md-4">
  <div class="card" style="inline-size: 18rem;">
   <div class="card-header">
    Category
   </div>
   <div class="card-body">
    <div class="accordion accordion-flush" id="accordionFlushExample">
     <div class="accordion-item p-0">
      <h2 class="accordion-header" id="flush-headingOne">
       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Pria
       </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
       <div class="accordion-body p-2">
        <div class="d-flex flex-column gap-1">
         <a href="#" class="page-link">
          <i class="fa fa-plus"></i> Kemeja
         </a>
         <a href="#" class="page-link">
          <i class="fa fa-plus"></i> Celana
         </a>
         <a href="#" class="page-link">
          <i class="fa fa-plus"></i> Aksesoris
         </a>
         <a href="#" class="page-link">
          <i class="fa fa-plus"></i> Topi
         </a>
        </div>
       </div>
      </div>
     </div>

     <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingTwo">
       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Wanita
       </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
       <div class="accordion-body p-2">
        <div class="d-flex flex-column gap-1">
         <a href="#" class="page-link">
          <i class="fa fa-plus"></i> Baju Santai
         </a>
         <a href="#" class="page-link">
          <i class="fa fa-plus"></i> Baju Tidur
         </a>
         <a href="#" class="page-link">
          <i class="fa fa-plus"></i> Aksesoris
         </a>
         <a href="#" class="page-link">
          <i class="fa fa-plus"></i> Tas
         </a>
        </div>
       </div>
      </div>
     </div>

     <div class="accordion-item ">
      <h2 class="accordion-header" id="flush-headingThree">
       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Anak - Anak
       </button>
      </h2>
      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
       <div class="accordion-body p-2">
        <div class="d-flex flex-column gap-1">
         <a href="#" class="page-link">
          <i class="fa fa-plus"></i> Baju
         </a>
         <a href="#" class="page-link">
          <i class="fa fa-plus"></i> Celana
         </a>
         <a href="#" class="page-link">
          <i class="fa fa-plus"></i> Aksesoris
         </a>
         <a href="#" class="page-link">
          <i class="fa fa-plus"></i> Perlengkapan Sekolah
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
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