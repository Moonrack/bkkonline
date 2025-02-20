<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="#" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">ONE CIKSEL</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('admin/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                        <span>{{ Auth::user()->usertype }}</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{url('admin/dashboard')}}" class="nav-item nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="fa fa-briefcase me-2"></i>Lowongan</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{url('tambah_loker')}}" class="dropdown-item {{ request()->is('tambah_loker') ? 'active' : '' }}">Tambah Lowongan</a>
                            <a href="{{url('view_loker')}}" class="dropdown-item {{ request()->is('view_loker') ? 'active' : '' }}">Lihat Lowongan</a>
                        </div>
                    </div>
                    <a href="{{url('pelamar')}}" class="nav-item nav-link {{ request()->is('pelamar') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Pelamar</a>
                </div>
                
            </nav>
        </div>