<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BKK SMKN 1 CIKSEL</title>
    <link href="{{asset('admin/img/favicon.png')}}" rel="icon">

    <!-- sweet aler -->
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
                        <a class="nav-link " aria-current="true" href="#tentang">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lowongan">Lowongan</a>
                    </li>
                    @if (Route::has('login'))

                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-primary" aria-labelledby="navbarDarkDropdownMenuLink">

                            <a href="{{url('update_profile')}}" class="dropdown-item">Profile Saya</a>

                            <form method="POST" action="{{ route('logout') }}" id="logout">
                                @csrf
                                <a href="javascript:;" class="dropdown-item" onclick="document.getElementById('logout').submit();">Logout</a>
                            </form>
                        </ul>
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
            <h1 class="text-center" style="font-size: 30px;">TENTANG KAMI</h1>
            <div class="text-center" style="color: black; font-size: 20px; font-family: 'Poppins', sans-serif; padding-bottom: 1rem;">
                Bursa Kerja Khusus (BKK) adalah sebuah lembaga yang dibentuk di Sekolah Menengah Kejuruan Negeri dan Swasta, sebagai unit pelaksana yang memberikan pelayanan dan informasi lowongan kerja, pelaksana pemasaran, penyaluran dan penempatan tenaga kerja, merupakan mitra Dinas Tenaga Kerja dan Transmigrasi.
            </div>
            <h1 class="text-center mt-5" style="font-size: 30px;">TUJUAN</h1>
            <p class="mb-5" style="color: black; font-size: 20px; font-family: 'Poppins', sans-serif; padding-bottom: 1rem;">
                1. Sebagai wadah dalam mempertemukan tamatan dengan pencari kerja. <br>
                2. Memberikan layanan kepada tamatan sesuai dengan tugas dan fungsi masing-masing seksi yang ada dalam BKK. <br>
                3. Sebagai wadah dalam pelatihan tamatan yang sesuai dengan permintaan pencari kerja. <br>
                4. Sebagai wadah untuk menanamkan jiwa wirausaha bagi tamatan melalui pelatihan. <br>

            </p>

            <!-- Tentang Saya Akhir -->
             <div class="col-sm-6 col-md-4 col-lg-4 container mb-5">
             <h1 class="text-center mb-5" style="font-size: 30px;">Perusahaan Yang Bekerja Sama</h1>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item  active" data-bs-interval="10000">
                        <img src="home/assets/pict/ani.jpg" class="container" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="home/assets/pict/musashi.jpg" class="container"  alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="home/assets/pict/epson.jpg" class="container"  alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="home/assets/pict/excel.jpg" class="container"  alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="home/assets/pict/mmki.png" class="container" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            </div>
            <!-- awal Contoh Project -->

            @include('home.job')

            <!-- akhir contoh project -->

            <!-- Kerjasama Awal -->
            <!-- <div class="round">
          <p class="example text-start" style="color: white; margin-left: 10px; padding-top: 6px; ">Apakah anda tertarik untuk bekerjasama dengan saya?
            <a class="float-end" style="text-decoration: none; margin-right: 20px;" href="mailto:carlos.athsnasius@gmail.com">
              <img src="home/assets/pict/email_logo_atas.png" class="img-fluid" alt="" width="120px" height="40px" >
            </a>
          </p>
           </div> -->
            <!-- Kerjasama Akhir -->

            <!-- Tools -->
            <!-- Tools Akhir -->

        </div>
        </div>
        </div>
        </div>
        </div>
    </section>

    <!-- Kontak Awal -->
    <footer class="text-center text-lg-start text-white mt-5" style="background-color: #1c2331">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4" style="background-color: #0193dc">
            <!-- Left -->
            <div class="me-5">
                <span></span>
            </div>
            <!-- Left -->

            <!-- Right -->

            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">SMKN 1 CIKARANG SELATAN</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            SMK Negeri 1 Cikarang Selatan berasal dari SMK Kecil di Cikarang Selatan yang berdiri pada tahun 2004.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->

                    <!-- Grid column -->

                    <!-- Grid column -->

                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Kontak</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><i class="fas fa-home mr-3"></i> JL.CIANTRA, Kabupaten Bekasi, Jawa Barat</p>
                        <p><i class="fas fa-envelope mr-3"></i> ictciksel@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> 081218442986</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2024 Copyright:
            <a class="text-white" href="#" style="text-decoration: none;">SMKN 1 Cikarang Selatan</a>
        </div>
        <!-- Copyright -->
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
    <script src="https://kit.fontawesome.com/4d7be0e95f.js" crossorigin="anonymous"></script>

</body>

</html>