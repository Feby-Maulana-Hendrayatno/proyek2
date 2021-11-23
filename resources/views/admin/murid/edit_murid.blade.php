@extends("layouts.template")

@section("content")

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
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
                <div class="card-body">
                    <form method="POST" action="{{ url('/admin/murid/update/')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $edit->id }}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Murid</label>
                                <input type="" name="nama_murid" class="form-control" id="" placeholder="Masukan Nama Murid" required value="{{ $edit->nama_murid }}">
                            </div>
                            <div class="form-group">
                                <label>Umur</label>
                                <input type="" name="umur" class="form-control" id="" placeholder="Umur Murid" required value="{{ $edit->umur }}">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <br>
                                @if($edit->jenis_kelamin == "Laki-laki")
                                <input type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-laki
                                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                                @elseif($edit->jenis_kelamin == "Perempuan")
                                <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                                <input type="radio" name="jenis_kelamin" value="Perempuan" checked> Perempuan
                                @else
                                <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Nomer Handphone</label>
                                <input type="" name="no_hp" class="form-control" id="" placeholder="Nomer Handphone" value="{{ $edit->no_hp }}">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="" name="alamat" class="form-control" id="" placeholder="Masukan Alamat" value="{{ $edit->alamat }}">
                            </div>
                            <div class="form-group">
                                <label for=""> Foto </label> <br>
                                <img src="/image/{{ $edit->foto }}" width="300">
                            </div>
                            <div class="form-group">
                                <label>Foto Murid</label>
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
