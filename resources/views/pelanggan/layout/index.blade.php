<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- cdnjs.com -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!-- file css -->
 <link rel="stylesheet" href="{{asset('css/style.css')}}">

 <title>Muslimahstore.com | {{ $title }} </title>

 <!-- bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

 <!-- font-awesome -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
</head>

<body>

 <main>
  <header>
   @include('pelanggan.component.navbar')
  </header>

  <section>
   ini konten
  </section>

  <footer>
   <div class="container">
    <div class="d-flex">
     <div class="title-left">
      <div class="header-title">
       Muslimahstore.com
      </div>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque deleniti, unde assumenda eius voluptatum quo odio, totam officia quos porro accusamus maiores fuga iusto quam?</p>
     </div>
     <div class="title-middle">
      <div class="header-title">
       Tentang Kami
      </div>
      <ul>
       <li>
        <address>
         Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus fugit saepe suscipit voluptate ducimus eius?
        </address>
       </li>
       <li>
        phone number - 0821-2658-8895
       </li>
      </ul>
     </div>
     <div class="sosmed">
      <i class="fa fa-instagram"></i>
     </div>
    </div>
   </div>
  </footer>

 </main>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>