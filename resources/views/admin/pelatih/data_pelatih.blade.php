@extends("layouts.template")

@section("content")

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

			@if(session("tambah"))
			<div class="alert alert-success" role="alert">
				{{  session("tambah")  }}
			</div>
			@elseif(session("update"))
			<div class="alert alert-warning" role="alert">
				{{ session("update") }}
			</div>
			@endif

			<div class="card">
				<div class="card-header">
				<a href="{{ url('/admin/pelatih/tambah_data') }}">
					<h3 class="card-title">
						<span class="btn btn-success col fileinput-button dz-clickable">
                        <i class="fas fa-plus"></i>
                        <span >Data Pelatih</span>
                    	</span>
					</h3>
				</a>
				</div>
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama Pelatih</th>
								<th>Jenis Kelamin</th>
								<th>Jenis Tari</th>
								<th>Nomer Handphone</th>
								<th>Alamat</th>
								<th>Foto</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php $no = 0 @endphp
							@foreach($data_pelatih as $dp)
							<tr>
								<td>{{ ++$no }}</td>
								<td>{{ $dp->nama_pelatih }}</td>
								<td>{{ $dp->jenis_kelamin }}</td>
								<td>{{ $dp->jenis_tari }}</td>
								<td>{{ $dp->no_hp }}</td>
								<td>{{ $dp->alamat }}</td>
								<td>
									<img src="image/{{ $dp->foto }}" width="150" height="100">
								</td>
                                <td>
									<a href="/admin/edit/{{ $dp->id }}" class="btn btn-warning btn-sm"> Edit </a>
									<a href="/admin/pelatih/hapus/{{ $dp->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">
										Hapus
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
