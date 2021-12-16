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
                    <form method="POST" action="/pelatih/update" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $edit->id }}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Role</label>
                                <input type="" name="role" class="form-control" id="" placeholder="Masukan Role" required value="{{ $edit->role }}">
                            </div>
                            <div class="form-group">
                                <label>Nama Pelatih</label>
                                <input type="" name="nama_pelatih" class="form-control" id="" placeholder="Masukan Nama" required value="{{ $edit->nama_pelatih }}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="" name="email" class="form-control" id="" placeholder="Masukan Email" required value="{{ $edit->email }}">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="" name="password" class="form-control" id="" placeholder="Password" required >
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <br>
                                @if($edit->gender_pelatih == "Laki-laki")
                                <input type="radio" name="gender_pelatih" value="Laki-laki" checked> Laki-laki
                                <input type="radio" name="gender_pelatih" value="Perempuan"> Perempuan
                                @elseif($edit->gender_pelatih == "Perempuan")
                                <input type="radio" name="gender_pelatih" value="Laki-laki"> Laki-laki
                                <input type="radio" name="gender_pelatih" value="Perempuan" checked> Perempuan
                                @else
                                <input type="radio" name="gender_pelatih" value="Laki-laki"> Laki-laki
                                <input type="radio" name="gender_pelatih" value="Perempuan"> Perempuan
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Jenis Tari</label>
                                <input type="" name="jenis_tari" class="form-control" id="" placeholder="Jenis Tari yang Dikuasai" value="{{ $edit->jenis_tari }}">
                            </div>
                            <div class="form-group">
                                <label>Nomer Handphone</label>
                                <input type="" name="no_hp" class="form-control" id="" placeholder="Masukan Alamat" value="{{ $edit->no_hp }}">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="" name="alamat_pelatih" class="form-control" id="" placeholder="Masukan Alamat" value="{{ $edit->alamat_pelatih }}">
                            </div>
                            <div class="form-group">
                                <label for=""> Gambar </label> <br>
                                <img src="/image/{{ $edit->foto_pelatih }}" width="300">
                            </div>
                            <div class="form-group">
                                <label>Foto Pelatih</label>
                                <input type="file" class="form-control" name="foto_pelatih" id="" placeholder="Masukan Foto/Gambar">
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
