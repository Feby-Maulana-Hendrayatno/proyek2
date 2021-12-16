@extends("layouts.template")

@section("header")

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0"> Murid </h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/admin/dashboard') }}"> Dashboard </a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="{{ url('/admin/murid/') }}"> Data Murid </a>
                  </li>
                  <li class="breadcrumb-item active"> Tambah Data Murid </li>
              </ol>
            </div>
          </div>
        </div>
        
        @endsection
        @section("content")
        
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <form method="POST" action="{{ url('/admin/murid/store/') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card-body">
              <div class="form-group">
              <label>Nama Murid</label>

              <input type="" name="nama_murid" class="form-control" id="" placeholder="Masukan Nama" required>
            </div>
            <div class="form-group">
                <label>umur</label>
                <input type="number" name="umur" class="form-control" id="" placeholder="Masukan umur anda"  required>
              </div>
              <div class="card-header">
                <a href="{{ url('/admin/murid/') }}"> 
                  <h3 class="card-title">
                    <span class="btn btn-secondary col fileinput-button dz-clickable">
                      <i class="fa fa-reply"></i>
                      <span >Data Murid</span>
                    </span>
                  </h3>
                </a>
              </div>
              <div class="form-group">
                <label>Jenis Kelamin&nbsp;
                <input type="radio" name="jenis_kelamin" value="L" required> Laki-laki &nbsp;&nbsp;&nbsp;
                <input type="radio" name="jenis_kelamin" value="P" required> Perempuan
                </label>
              </div>
              <div class="form-group">
                <label>No HP</label>
                <input type="text" name="no_hp" class="form-control" id="" placeholder="Nomor Handphone" required>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="" name="alamat" class="form-control" id="" placeholder="Alamat Murid" required>
              </div>
              <div class="form-group">
                <label>Foto</label>
                <input type="file" class="form-control" name="foto" id="" placeholder="Masukan Foto/Gambar" required>
              </div>
              <br>
              <div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
				</div>
			</div>		
		</div>
	</div>
</div>
@endsection