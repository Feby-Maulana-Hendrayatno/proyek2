@extends("layouts.template")

@section("content")

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/admin/pelatih/') }}">
                        <h3 class="card-title">
                            <span class="btn btn-secondary col fileinput-button dz-clickable">
                                <i class="fa fa-reply"></i>
                                <span >Data Pelatih</span>
                            </span>
                        </h3>
                    </a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/admin/pelatih/store/') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Pelatih</label>
                                <input type="text" name="nama_pelatih" class="form-control" id="" placeholder="Masukan Nama" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin&nbsp;
                                    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Jenis Tari</label>
                                <input type="" name="jenis_tari" class="form-control" id="" placeholder="Jenis Tari yang Dikuasai">
                            </div>
                            <div class="form-group">
                                <label>Nomer Handphone</label>
                                <input type="text" name="no_hp" class="form-control" id="" placeholder="Nomer Handphone">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="" name="alamat" class="form-control" id="" placeholder="Masukan Alamat">
                            </div>
                            <div class="form-group">
                                <label>Foto Pelatih</label>
                                <input type="file"  name="foto" class="form-control" id="" placeholder="Masukan Foto/Gambar">
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
