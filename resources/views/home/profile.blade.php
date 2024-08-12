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
                        <a class="nav-link " aria-current="true" href="{{url('/')}}">Home</a>
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
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-primary" aria-labelledby="navbarDarkDropdownMenuLink">
                            <a href="#" class="dropdown-item">Profile Saya</a>
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
        <div class="container-xl px-4 mt-4">
            <!-- Account page navigation-->

            <hr class="mt-0 mb-4">
            <div class="row">
                <div class="col-xl-2">
                    <!-- Profile picture card-->

                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Profile</div>
                        <div class="card-body">
                            <form method="post" action="{{ url('update') }}" enctype="multipart/form-data">
                                @csrf
                                <!-- Form Group (username)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputUsername">Nama Lengkap</label>
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Nama Lengkap" value="{{$user->name}}">
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputUsername">No KTP (NIK)</label>
                                    <input class="form-control" id="nik" name="nik" type="text" placeholder="NIK" value="{{$user->nik}}">
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Masukkan Email anda" value="{{$user->email}}">
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputEmailAddress">Alamat</label>
                                    <input class="form-control" id="address" name="address" type="text" placeholder="Masukkan alamat lengkap" value="{{$user->address}}">
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputFirstName">Tanggal Lahir</label>
                                        <input class="form-control" id="tl" name="tl" type="date" placeholder="Masukkan Tanggal Lahir" value="{{$user->tl}}">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLastName">Tempat Lahir</label>
                                        <input class="form-control" id="lahir" name="lahir" type="text" placeholder="Masukkan Tempat Lahir" value="{{$user->lahir}}">
                                    </div>
                                </div>
                                <!-- Form Row        -->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (organization name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputOrgName">Tinggi Badan</label>
                                        <input class="form-control" id="tb" name="tb" type="text" placeholder="Tinggi Badan" value="{{$user->tb}}">
                                    </div>
                                    <!-- Form Group (location)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLocation">Berat Badan</label>
                                        <input class="form-control" id="bb" name="bb" type="text" placeholder="Berat Badan" value="{{$user->bb}}">
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (organization name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputOrgName">Tahun Lulus</label>
                                        <input class="form-control" id="lulus" name="lulus" type="text" placeholder="Tahun Lulus" value="{{$user->lulus}}">
                                    </div>
                                    <!-- Form Group (location)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLocation">Jurusan</label>
                                        <input class="form-control" id="jurusan" name="jurusan" type="text" placeholder="Jurusan Anda" value="{{$user->jurusan}}">
                                    </div>
                                </div>
                                <!-- Form Group (email address)-->

                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (phone number)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPhone">No HP/WA</label>
                                        <input class="form-control" id="phone" name="phone" type="tel" placeholder="Masukkan No anda" value="{{$user->phone}}">
                                    </div>
                                    <!-- Form Group (birthday)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputBirthday">Jenis Kelamin</label>
                                        <select class="form-select" aria-label="Default select example" id="jk" name="jk">
                                            <option value="{{$user->jk}}">{{$user->jk}}</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Save changes button-->
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </form>
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