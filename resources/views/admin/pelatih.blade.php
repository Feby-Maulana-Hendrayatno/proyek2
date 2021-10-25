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
								<td>{{ $dp->gender_pelatih }}</td>
								<td>{{ $dp->jenis_tari }}</td>
								<td>{{ $dp->no_hp }}</td>
								<td>{{ $dp->alamat_pelatih }}</td>
								<td>
									<img src="image/{{ $dp->foto_pelatih }}" alt="">
								</td>
								<td>
									<button type="button" class="btn btn-warning">Edit</button>
									{!! Form::open(['method' => 'DELETE','route' => ['pelatih.destroy', $pelatih->id_pelatih],'style'=>'display:inline']) !!}
									{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
									{!! Form::close() !!}
									
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