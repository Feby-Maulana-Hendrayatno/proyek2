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
                <label>Role</label>
                <input type="" name="role" class="form-control" id="" placeholder="Masukan Role" required>
              </div>
              <div class="form-group">
                <label>Nama Murid</label>
                <input type="" name="nama_murid" class="form-control" id="" placeholder="Masukan Nama" required>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" id="" placeholder="Masukan Email" required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" id="" placeholder="Masukan Password" required>
              </div>
              <div class="form-group">
                <label>umur</label>
                <input type="number" name="umur" class="form-control" id="" placeholder="Masukan umur anda"  required>
              </div>
              <div class="form-group">
                <label>Gender&nbsp;
                <input type="radio" name="gender_murid" value="Laki-laki"> Laki-laki &nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender_murid" value="Perempuan"> Perempuan
                </label>
              </div>
              <div class="form-group">
                <label>No HP</label>
                <input type="text" name="no_hp" class="form-control" id="" placeholder="Nomor Handphone">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="" name="alamat_murid" class="form-control" id="" placeholder="Alamat Murid">
              </div>
              <div class="form-group">
                <label>Foto</label>
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