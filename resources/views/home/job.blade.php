<div class="heading_container heading_center" id="lowongan">
    <h2 class="text-center" style="color: #0193dc; font-size: 30px;">
        Lowongan <span>Tersedia</span>
    </h2>
</div>
<div class="row">
    @foreach($lowongan as $lowongans)
    <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="box" style="border-radius: 10px;">
            <div class="option_container">
                <div class="options">
                    <a href="{{url('job_details',$lowongans->id)}}" class="option1" style="text-decoration: none;">
                        Detail Lowongan
                    </a>
                    <form action="{{url('add_job',$lowongans->id)}}" method="post">
                        @csrf
                        <input type="submit" class="option2" value="Daftar">
                    </form>
                </div>
            </div>
            <div class="img-box">
                <img src="loker/{{$lowongans->gambar}}" alt="">
            </div>
            <div class="detail-box">
                <h6 style="font-size:20px;">
                    <span style="color: #666;">{{$lowongans->pt}} </span>
                </h6>
            </div>
            <div class="detail-box">
                <h6>
                    <span style="color: #666;">{{$lowongans->posisi}} </span>
                </h6>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="btn-box">
    <a href="" style="text-decoration: none; border-radius:10px; ">
        Lihat Lowongan Lain
    </a>
</div>