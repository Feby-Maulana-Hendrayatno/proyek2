<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="/template/dist/img/SanggarTari.png" alt="SanggarTari" class="brand-image img-circle elevation-3" style="opacity: .8" width="35" height="40">
    <span class="brand-text font-weight-light">Sanggar Tari Melati</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Kelompok1</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <br>
            <li class="nav-header">Dashboard</li>
            <li class="nav-item">
              <a href="/admin/dashboard" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Home
                </p>
              </a>
            </li>
            <li class="nav-header">
              Daftar Menu
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Menu
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('/admin/form/') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Form Pengunjung</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('/admin/kategori_tari/') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kategori Tari</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('/admin/pelatih/') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pelatih</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('/admin/pelatih_kategori_tari/') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pelatih Kategori Tari</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/admin/murid" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Murid</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('/admin/kemampuan/') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kemampuan</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{ url('/admin/full-calender/') }}" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Event
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
            </li>
            <li class="nav-header">Penilaian</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Nilai Murid
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Nilai</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">Report</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Laporan
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('/admin/laporan/data_absen') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Laporan Data Absen</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <p>Laporan Data Penyewaan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <p>Laporan Data Nilai Murid</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">Akun</li>
            <li class="nav-item">
              <a href="{{ url('/admin/users') }}" class="nav-link">
                <i class="fa fa-bars"></i>
                <p>
                  Users
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/admin/role/') }}" class="nav-link">
                <i class="fa fa-bars"></i>
                <p>
                  Role
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>