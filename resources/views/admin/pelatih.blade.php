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
				<daiv class="card-header">
				<a href="/pelatih/addpelatih"> 
					<h3 class="card-title">
						<span class="btn btn-success col fileinput-button dz-clickable">
                        <i class="fas fa-plus"></i>
                        <span >Data Pelatih</span>
                    	</span>
					</h3>
				</a>
				</daiv>
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No.</th>
								<th>Role</th>
								<th>Nama Pelatih</th>
								<th>Email</th>
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
								<td>{{ $dp->role }}</td>
								<td>{{ $dp->nama_pelatih }}</td>
								<td>{{ $dp->email }}</td>
								<td>{{ $dp->gender_pelatih }}</td>
								<td>{{ $dp->jenis_tari }}</td>
								<td>{{ $dp->no_hp }}</td>
								<td>{{ $dp->alamat_pelatih }}</td>
								<td>
									<img src="image/{{ $dp->foto_pelatih }}" width="150" height="100">
								</td>
			 					<td>
									<a href="/pelatih/edit/{{ $dp->id }}" class="btn btn-warning btn-sm"> Edit </a>
									<a href="/pelatih/hapus/{{ $dp->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">
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