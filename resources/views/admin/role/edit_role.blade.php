@extends("layouts.template")

@section("content")

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
					<a href="/role"> 
						<h3 class="card-title">
							<span class="btn btn-secondary col fileinput-button dz-clickable">
                                <i class="fa fa-reply"></i>
								<span >Jenis Role</span>
							</span>
						</h3>
					</a>
				</div>
                <div class="card-body">
                    <form method="POST" action="/role/update" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_role" value="{{ $edit->id_role }}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Role</label>
                                <input type="" name="nama_role" class="form-control" id="" placeholder="Masukan Role" required value="{{ $edit->nama_role }}">
                            </div>
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