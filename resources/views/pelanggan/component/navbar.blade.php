<!-- start navbar -->
<nav class="navbar navbar-light navbar-expand-lg" style="background-color: #9EC8B9;">
 <div class="container">
  <a class="navbar-brand" href="#">Muslimahstore.com</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
   <ul class="navbar-nav gap-4">
    <li class="nav-item">
     <a class="nav-link fs-5 {{ Request::path() == '/' ? 'active' : ''; }}" aria-current="page" href="/">Home</a>
    </li>
    <li class="nav-item">
     <a class="nav-link fs-5 {{ Request::path() == 'shop' ? 'active' : ''; }}" href="/shop">Shop</a>
    </li>
    <li class="nav-item">
     <a class="nav-link fs-5 {{ Request::path() == 'contact' ? 'active' : ''; }}" href="/contact">Contact us</a>
    </li>
    <li class="nav-item">
     <a class="nav-link fs-5 {{ Request::path() == 'about' ? 'active' : ''; }}" href="/about">About</a>
    </li>
   </ul>
   <div class="d-flex gap-4 align-items-center">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#LoginModal">
     Login | Register
    </button>

    <div class="notifikasi">
     <a href="/transaction" class="fs-5">
      <i class="fa-solid  icon-nav fa-cart-shopping"></i>
     </a>
     <div class="circle">
      12
     </div>
    </div>
   </div>
  </div>
 </div>
</nav>
<!-- end navbar -->
