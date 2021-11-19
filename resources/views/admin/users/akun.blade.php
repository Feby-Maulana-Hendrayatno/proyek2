@extends("layouts.template")

@section("content")

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<a href="/role/addrole">
						<h3 class="card-title">
							<span class="btn btn-success col fileinput-button dz-clickable">
								<i class="fas fa-plus"></i>
								<span>Role</span>
							</span>
						</h3>
					</a>
				</div>
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th> Nama Role</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
                            @php $no = 0 @endphp
                            @foreach($data_akun as $akun)
                                <tr>

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
