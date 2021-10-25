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
								<span >Data Pelatih</span>
							</span>
						</h3>
					</a>
				</div>
                <div class="card-body">
                    <form method="POST" action="/murid/update" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $edit->id }}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Pelatih</label>
                                <input type="" name="nama_murid" class="form-control" id="" placeholder="Masukan Nama" required value="{{ $edit->nama_murid }}">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <br>
                                @if($edit->gender_murid == "Laki-laki")
                                <input type="radio" name="gender_murid" value="Laki-laki" checked> Laki-laki
                                <input type="radio" name="gender_murid" value="Perempuan"> Perempuan
                                @elseif($edit->gender_murid == "Perempuan")
                                <input type="radio" name="gender_murid" value="Laki-laki"> Laki-laki
                                <input type="radio" name="gender_murid" value="Perempuan" checked> Perempuan
                                @else
                                <input type="radio" name="gender_murid" value="Laki-laki"> Laki-laki
                                <input type="radio" name="gender_murid" value="Perempuan"> Perempuan
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Jenis Tari</label>
                                <input type="number" name="umur" class="form-control" id="" placeholder="Usia Murid" value="{{ $edit->umur }}">
                            </div>
                            <div class="form-group">
                                <label>Nomer Handphone</label>
                                <input type="" name="no_hp" class="form-control" id="" placeholder="Masukan Alamat" value="{{ $edit->no_hp }}">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="" name="alamat_murid" class="form-control" id="" placeholder="Masukan Alamat" value="{{ $edit->alamat_pelatih }}">
                            </div>
                            <div class="form-group">
                                <label for=""> Gambar </label> <br>
                                <img src="/image/{{ $edit->foto_murid }}" width="300">
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