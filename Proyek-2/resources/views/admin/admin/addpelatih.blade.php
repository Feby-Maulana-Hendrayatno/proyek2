@extends("layouts.template")

@section("content")

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">
            Data Pelatih
          </h3>
        </div>
        <div class="card-body">
          <form method="POST" action="/add" enctype="multipart/from-data">
            {{ csrf_field() }}
            <div class="card-body">
              <div class="form-group">
                <label>Nama Pelatih</label>
                <input type="" name="nama_pelatih" class="form-control" id="" placeholder="Masukan Nama" required>
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <input type="" name="gender_pelatih" class="form-control" id="" placeholder="Jenis kelamin">
              </div>
              <div class="form-group">
                <label>Jenis Tari</label>
                <input type="" name="jenis_tari" class="form-control" id="" placeholder="Jenis Tari yang Dikuasai">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="" name="alamat_pelatih" class="form-control" id="" placeholder="Masukan Alamat">
              </div>
              <div class="form-group">
                <label>Foto Pelatih</label>
                <input type="file" class="form-control" id="" placeholder="Masukan Foto/Gambar">
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