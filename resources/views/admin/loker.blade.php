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
                        <h6 class="mb-0">DAFTAR PERUSAHAAN</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white text-center">
                                    <th scope="col">Nama PT</th>
                                    <th scope="col">Posisi</th>
                                    <th scope="col">Persayaratan</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lowongan as $lowongans)
                                <tr>
                                    <td>{{$lowongans->pt}}</td>
                                    <td>{{$lowongans->posisi}}</td>
                                    <td>{!!Str::words($lowongans->syarat,5)!!}</td>
                                    <td>
                                        <img height="200" width="200" style="border-radius: 10px;" src="loker/{{$lowongans->gambar}}" alt="" srcset="">
                                    </td>
                                    <td>Paid</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-info" href="{{url('edit_job',$lowongans->id)}}"><i class="fa fa-pen-to-square"></i></a>
                                        <a class="btn btn-sm btn-primary" onclick="confirmation(event)" href="{{url('delete_job',$lowongans->id)}}"><i class="fa fa-trash"></i></a>
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