@extends("layouts.template")
@section("alerts")
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session("tambah"))
		<script>
			Swal.fire(
			'Data Berhasil di Tambahkan',
			'',
			'success'
			)
		</script>
		@elseif(session("update"))
		<script>
			Swal.fire(
			'Data Berhasil di Update',
			'',
			'success'
			)
		</script>
	@endif
@stop


@section("content")

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<a href="/murid/addmurid"> 
						<h3 class="card-title">
							<span class="btn btn-success col fileinput-button dz-clickable">
								<i class="fas fa-plus"></i>
								<span >Data Murid</span>
							</span>
						</h3>
					</a>
				</div>
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No.</th>
								<th>Role</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Password</th>
								<th>Umur</th>
								<th>Gender</th>
								<th>No HP</th>
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
								<td>{{ $dp->role }}</td>
								<td>{{ $dp->nama_murid }}</td>
								<td>{{ $dp->email }}</td>
								<td>{{ $dp->password }}</td>
								<td>{{ $dp->umur }}</td>
								<td>{{ $dp->gender_murid }}</td>
								<td>{{ $dp->no_hp }}</td>
								<td>{{ $dp->alamat_murid }}</td>
								<td>
									<img src="image/{{ $dp->foto_murid }}" alt="" width="90" height="100">
								</td>
								<td>
									<a href="/murid/edit/{{ $dp->id }}" class="btn btn-warning btn-sm"></i><i class="fas fa-edit"></i></a>
									<a href="/murid/hapus/{{ $dp->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');"></i><i class="fas fa-trash"></i></a>
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