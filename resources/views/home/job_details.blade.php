<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>BKK SMKN 1 CIKSEL</title>
   <link href="{{asset('admin/img/favicon.png')}}" rel="icon">

   <!-- awal css -->
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!-- my css -->
   <link rel="stylesheet" href="home/assets/style.css">
   <!-- Akhir my css -->
   <!-- awal fontawesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- akhir fontawesome -->
   <!-- font css -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
   body {
    background-color: white;
    font-family: "Poppins", sans-serif;;
}
html {
    scroll-behavior: smooth;
}
</style>
<body>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark shadow sticky-top" style="background: #0193dc;">
      <div id="navdone" class="container">
         <a class="navbar-brand">
            BKK SMKN 1 CIKARANG SELATAN
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="{{url('/')}}">Home</a>
                    </li>
               <li class="nav-item">
                  <a class="nav-link active" aria-current="true" href="#tentang">Tentang Kami</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#lowongan">Lowongan</a>
               </li>
               @if (Route::has('login'))

               @auth
               <li class="nav-item">
                  <form method="POST" action="{{ route('logout') }}" id="logout" x-data>
                     @csrf
                     <a class="btn btn-danger" style="font-weight:bold; margin-left:10px; color:white;" href="javascript:;" onclick="document.getElementById('logout').submit();">Logout</a>
                  </form>
               </li>
               @else
               <li class="nav-item">
                  <a class="btn btn" style="margin-right: 10px; background-color:#01903e; color:white; font-weight:bold; margin-left:1rem;" href="{{ url('/login') }}">Login</a>
               </li>

               <li class="nav-item">
                  <a class="btn btn" style="font-weight:bold; background-color:#fff800; color:black; " href="{{ url('/register') }}">Register</a>
               </li>
               @endauth
               @endif


            </ul>
         </div>
      </div>
   </nav>
   <!-- akhir navbar -->

   <!-- Tentang Saya -->
   <!-- Tentang Saya -->
   <section id="tentang" class="jumbotron jumbotron-fluid">
      <div class="container">


         <!-- awal Contoh Project -->

         <div class="col-sm-6 col-md-4 col-lg-4" style="margin:auto;padding:30px">
            <div class="img-box" style="padding:35px">
               <img class="container" src="/loker/{{$data->gambar}}" alt="">
            </div>
            <div class="detail-box">
               <h3>
                  {{$data->pt}}
               </h3>
               <h6>Posisi : {{$data->posisi}}</h6>
               <h6>Persyaratan kerja di PT: {{$data->pt}}</h6>
               <h6>{{$data->syarat}}</h6>
               <form action="#" method="POST">

                  @csrf
                  <div class="row">
                     <div class="col-md-4">
                        <input type="submit" class="btn btn-success" value="Daftar">
                     </div>

                  </div>
               </form>
            </div>
         </div>

         <!-- akhir contoh project -->

      </div>
   </section>

   <!-- Kontak Awal -->
   <footer class="text-start text-white" style="padding-top: 15px; padding-bottom: 10px; background-color: #0193dc; margin-top:10rem;">

      <div class="container">
         <h1 id="kontak">Kontak</h1>
         <p style="font-family: 'Roboto', sans-serif;">Untuk Bisnis dan Info lebih lanjut dapat menghubungi kontak dibawah ini</p>
         <a style="color: white; font-family: 'Roboto', sans-serif;" href="mailto:carlos.athsnasius@gmail.com">carlos.athsnasius@gmail.com </a>
         <div class="text-start" style="margin-top: 30px;">
            <a style="text-decoration: none;" href="https://wa.me/6283891406109">
               <img src="home/assets/pict/wa.png" alt="" width="32px ">
            </a>
            <a style="text-decoration: none;" href="https://web.facebook.com/athanasius.carlos.5/">
               <img src="home/assets/pict/fb.png" alt="" width="32px" style="margin-left: 10px;">
            </a>
            <a style="text-decoration: none;" href="https://www.instagram.com/yuda_813/">
               <img src="home/assets/pict/ig.png" alt="" width="32px" style="margin-left: 10px;">
            </a>
            <p class="text-center" style="padding-top: 60px;">© 2021 Copyright: <a style="text-decoration: none; color: white;" href="https://www.instagram.com/yuda_813/">Athanasius Carlos</a></p>
         </div>
   </footer>
   <!-- Kontak Akhir -->

   <!-- js script -->
   <script>
      // Add active class to the current button (highlight it)
      var header = document.getElementById("navdone");
      var btns = header.getElementsByClassName("nav-link");
      for (var i = 0; i < btns.length; i++) {
         btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
         });
      }
   </script>

   <!-- js script end -->



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>