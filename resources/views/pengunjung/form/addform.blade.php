
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
        <div class="card-body">
          <form method="POST" action="{{ url('/pengunjung/form/tambah') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
              <div class="form-group">
                <label>Nama Murid</label>
                <input type="" name="nama" class="form-control" id="" placeholder="Masukan Nama" required>
              </div>
              <div class="form-group">
                <label>umur</label>
                <input type="number" name="umur" class="form-control" id="" placeholder="Masukan umur anda"  required>
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