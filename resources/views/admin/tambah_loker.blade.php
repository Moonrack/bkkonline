<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        @include('admin.spinner')
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include('admin.sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('admin.navbar')
            <!-- Navbar End -->


            <div class="container-fluid pt-4 px-4">


                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Pendaftaran Perusahaan</h6>
                    <form action="{{url('upload_loker')}}" method="Post" enctype="multipart/form-data" >
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="pt" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Posisi Lowongan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="posisi" required>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <label for="" class="col-sm-2 col-form-label">Persyaratan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="syarat" required></textarea>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <label for="" class="col-sm-2 col-form-label">Gambar Perusahaan</label>
                            <div class="col-sm-10">
                            <input class="form-control bg-dark" type="file" id="formFile" name="gambar" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" value="tambah loker">Tambah</button>
                    </form>
                </div>

            </div>


            <!-- Footer Start -->

            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        
    </div>

    @include('admin.script')
</body>

</html>