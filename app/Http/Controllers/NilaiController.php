<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Murid;
use App\Models\KategoriTari;

class NilaiController extends Controller
{
    public function index()
    {
        $data = [
            "data_murid" => Murid::orderBy("nama_murid", "ASC")->get(),
            "data_nilai" => Nilai::orderBy("nama_murid", "ASC")->get(),
            "data_kategori_tari" => KategoriTari::orderBy("id", "ASC")->get()
        ];

        return view("/pelatih/nilai/data_nilai", $data);
    }

    public function tambah(Request $request)
    {
        Nilai::create($request->all());

        return redirect()->back();
    }

    public function hapus(Request $request)
    {
        Nilai::where("id", $request->id)->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $data = [
            "edit" => Nilai::where("id", $id)->first(),
            "data_role" => Nilai::where("id", "!=", $id)->orderBy("id_murid", "ASC")->get()
        ];

        return view("/pelatih/niai/edit_nilai", $data);
    }

    public function simpan(Request $request)
    {
        Nilai::where("id", $request->id)->update([
            "id_murid" => $request->id_murid,
            "jenis_tari" => $request->jenis_tari,
            "nilai" => $request->nilai

        ]);

        return redirect("/pelatih/nilai");
    }
}
