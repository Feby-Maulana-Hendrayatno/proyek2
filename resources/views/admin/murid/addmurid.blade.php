@extends("layouts.template")

@section("content")

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
        <div class="card-header">
					<a href="/murid"> 
						<h3 class="card-title">
							<span class="btn btn-secondary col fileinput-button dz-clickable">
                <i class="fa fa-reply"></i>
								<span >Data Murid</span>
							</span>
						</h3>
					</a>
				</div>
        <div class="card-body">
          <form method="POST" action="/murid/add" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
              <div class="form-group">
                <label>Nama Pelatih</label>
                <input type="" name="nama_murid" class="form-control" id="" placeholder="Masukan Nama" required>
              </div>
              <div class="form-group">
                <label>umur</label>
                <input type="number" name="umur" class="form-control" id="" placeholder="Jenis Tari yang Dikuasai">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin&nbsp;
                <input type="radio" name="gender_murid" value="Laki-laki"> Laki-laki &nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender_murid" value="Perempuan"> Perempuan
                </label>
              </div>
              <div class="form-group">
                <label>Nomer Handphone</label>
                <input type="text" name="no_hp" class="form-control" id="" placeholder="Masukan Alamat">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="" name="alamat_murid" class="form-control" id="" placeholder="Masukan Alamat">
              </div>
              <div class="form-group">
                <label>Foto Pelatih</label>
                <input type="file" class="form-control" name="foto_murid" id="" placeholder="Masukan Foto/Gambar">
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