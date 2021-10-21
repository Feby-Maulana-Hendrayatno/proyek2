@extends("layouts.template")

@section("content")

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
				<a href="/addpelatih"> 
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
								<th>Alamat</th>
								<th>Foto</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php $no = 0 @endphp
							@foreach($data_murid as $dp)
							<tr>
								<td>{{ ++$no }}</td>
								<td>{{ $dp->nama_pelatih }}</td>
								<td>{{ $dp->gender_pelatih }}</td>
								<td>{{ $dp->jenis_tari }}</td>
								<td>{{ $dp->alamat_pelatih }}</td>
								<td>{{ $dp->foto_pelatih }}</td>
								<td>
									<button type="button" class="btn btn-warning">Edit</button>
									<button type="button" class="btn btn-danger">Hapus</button>
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