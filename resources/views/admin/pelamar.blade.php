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
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">DAFTAR PELAMAR</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white text-center">
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Asal Sekolah</th>
                                    <th scope="col">No HP</th>
                                    <th scope="col">PT. Terdaftar</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($job as $job)
                                <tr>
                                    <td>{{$job->name}}</td>
                                    <td>{{$job->email}}</td>
                                    <td>{{$job->sekolah}}</td>
                                    <td>{{$job->phone}}</td>
                                    <td>{{$job->pt}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-info" href="#"><i class="fa fa-pen-to-square"></i></a>
                                        <a class="btn btn-sm btn-primary" onclick="confirmation(event)" href=""><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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