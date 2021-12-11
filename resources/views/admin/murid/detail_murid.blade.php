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
								<span> Kembali </span>
							</span>
						</h3>
					</a>
				</div>
                <div class="card-body">
        			{{ csrf_field() }}
					<input type="hidden" name="id" value="{{ $detail->id }}">
					<div class="card-body">
						<div class="form-group">
							<label>Nama Murid</label>
							<input disabled class="form-control"  value="{{ $detail->nama_murid }}">
						</div>
						<div class="form-group">
							<label>Umur</label>
							<input disabled class="form-control" value="{{ $detail->umur }}">
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<input disabled class="form-control" value="{{ $detail->jenis_kelamin }}">
						</div>
						<div class="form-group">
							<label>Nomer Handphone</label>
							<input disabled class="form-control" value="{{ $detail->no_hp }}">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input disabled class="form-control" value="{{ $detail->alamat }}">
						</div>
						<div class="form-group">
							<label for=""> Foto </label> <br>
							<img src="/image/{{ $detail->foto }}" width="300">
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
