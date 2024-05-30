<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- cdnjs.com -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!-- our css dan js design manual -->
 <link rel="stylesheet" href="{{asset('css/style.css')}}">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <!-- sumber https://developers.google.com/fonts/docs/material_symbols -->
 <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

 <title>Muslimahstore.com | {{ $title }}</title>

 <!-- bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

 <!-- font-awesome -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

</head>

<body>

 <main>

  <aside class="sidebar navbar navbar-expand-lg d-flex flex-column gap-2">
   <h6>MuslimahStore.com</h6>
   <div class="collapse navbar-collapse flex-grow-0" id="navbarNavDropdown">
    <ul class="navbar-nav d-flex flex-column gap-2">
     <li class="nav-item">
      <a class="nav-link active" href="#">
       <div class="d-flex gap-1">
        <span class="material-symbols-outlined">
         settings_accessibility
        </span>
        <p class="m-0 p-0">User Management</p>
       </div>
      </a>
     </li>
     <li class="nav-item">
      <a class="nav-link active" href="#">
       <div class="d-flex gap-1">
        <span class="material-symbols-outlined">
         line_style
        </span>
        <p class="m-0 p-0">Dashboard</p>
       </div>
      </a>
     </li>
     <li class="nav-item">
      <a class="nav-link active" href="#">
       <div class="d-flex gap-1">
        <span class="material-symbols-outlined">
         qr_code_2_add
        </span>
        <p class="m-0 p-0">Product</p>
       </div>
      </a>
     </li>
     <li class="nav-item">
      <a class="nav-link active" href="#">
       <div class="d-flex gap-1">
        <span class="material-symbols-outlined">
         summarize
        </span>
        <p class="m-0 p-0">Report</p>
       </div>
      </a>
     </li>
     <li class="nav-item">
      <a class="nav-link active" href="#">
       <div class="d-flex gap-1">
        <span class="material-symbols-outlined">
         logout
        </span>
        <p class="m-0 p-0">Logout</p>
       </div>
      </a>
     </li>
    </ul>
   </div>

  </aside>

 </main>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<script src="{{asset('js/custom.js')}}"></script>

</html>