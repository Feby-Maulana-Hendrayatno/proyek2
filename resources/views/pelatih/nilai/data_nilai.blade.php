@extends("layouts.template")

@section('title')
  Data Nilai
@stop

@section("content")

<div class="row">
    <div class="col-md-4">
        <form method="POST" action="{{ url('/pelatih/nilai/tambah/') }}">
            {{ csrf_field() }}
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        <span class="fa fa-plus"></span> Tambah Data
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_murid" >Nama</label>
                        <select name="nama_murid" id="nama_murid" class="form-control">
                        <option > - Nama Murid - </option>
                        @foreach ($data_murid as $murid)
                            <option value="{{ $murid->id }}">
                                {{ $murid->nama_murid }}
                            </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jenis_tari" >Jenis Tari</label>
                        <select name="jenis_tari" id="jenis_tari" class="form-control">
                        <option > - Jenis Tari - </option>
                        @foreach ($data_kategori_tari as $tari)
                            <option value="{{ $tari->id }}">
                                {{ $tari->nama_kategori_tari }}
                            </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nilai" >Nilai</label>
                        <input type="text" class="form-control" id="nilai" name="nilai" placeholder="Nilai">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info btn-sm">
                        <span class="fa fa-plus"></span>
                        Tambah
                    </button>
                    <button type="reset" class="btn btn-default btn-sm float-right">
                        <span class="fa fa-refresh"></span>
                        Batal
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-8">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Data Role
                </h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Jenis Tari</th>
                            <th class="text-center">Nilai</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 0 @endphp
                        @foreach($data_nilai as $nilai)
                        <tr>
                            <td class="text-center">{{ ++$no }}.</td>
                            <td class="text-center">{{ $nilai->nama_murid }}</td>
                            <td class="text-center">{{ $nilai->jenis_tari }}</td>
                            <td class="text-center">{{ $nilai->nilai }}</td>
                            <td class="text-center">
                                <a href="{{ url('/pelatih/nilai/edit') }}/{{ $nilai->id }}" class="btn btn-warning btn-sm">
                                    <span class="fa fa-edit"></span>
                                </a>
                                <form method="POST" action="{{ url('/pelatih/nilai/hapus') }}" style="display: inline;">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $nilai->id }}">
                                    <button onclick="return confirm('Ingin di Hapus ?')" type="submit" class="btn btn-danger btn-sm">
                                        <span class="fa fa-trash"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection