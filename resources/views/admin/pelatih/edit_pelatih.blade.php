@extends("layouts.template")

@section("header")

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0"> Pelatih </h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/admin/dashboard') }}"> Dashboard </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ url('/admin/data_pelatih') }}"> Data Pelatih </a>
                </li>
                <li class="breadcrumb-item active"> Edit Data Pelatih </li>
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
                <div class="card-header">
					<a href="{{ url('/admin/pelatih/') }}">
						<h3 class="card-title">
							<span class="btn btn-secondary col fileinput-button dz-clickable">
                                <i class="fa fa-reply"></i>
								<span >Edit Data Pelatih</span>
							</span>
						</h3>
					</a>
				</div>
                <div class="card-body">
                    <form method="POST" action="/admin/pelatih/update" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $edit->id }}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Pelatih</label>
                                <input type="" name="nama_pelatih" class="form-control" id="" placeholder="Masukan Nama" required value="{{ $edit->nama_pelatih }}">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <br>
                                @if($edit->jenis_kelamin == "L")
                                <input type="radio" name="jenis_kelamin" value="L" checked> Laki-laki
                                <input type="radio" name="jenis_kelamin" value="P"> Perempuan
                                @elseif($edit->jenis_kelamin == "Perempuan")
                                <input type="radio" name="jenis_kelamin" value="L"> Laki-laki
                                <input type="radio" name="jenis_kelamin" value="P" checked> Perempuan
                                @else
                                <input type="radio" name="jenis_kelamin" value="L"> Laki-laki
                                <input type="radio" name="jenis_kelamin" value="P"> Perempuan
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Umur</label>
                                <input type="number" name="umur" class="form-control" id="" placeholder="Umur Pelatih" value="{{ $edit->umur }}" required>
                            </div>
                            <div class="form-group">
                                <label>Nomer Handphone</label>
                                <input type="" name="no_hp" class="form-control" id="" placeholder="Masukan Alamat" value="{{ $edit->no_hp }}" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="" name="alamat" class="form-control" id="" placeholder="Masukan Alamat" value="{{ $edit->alamat }}" required>
                            </div>
                            <div class="form-group">
                                <label for=""> Gambar </label> <br>
                                <img src="/image/{{ $edit->foto }}" width="300" required>
                            </div>
                            <div class="form-group">
                                <label>Foto Pelatih</label>
                                <input type="file" class="form-control" name="foto" id="" placeholder="Masukan Foto/Gambar">
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
