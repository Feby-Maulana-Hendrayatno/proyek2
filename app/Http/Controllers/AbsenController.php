<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absen;
use App\Models\Murid;

class AbsenController extends Controller
{
    public function index()
    {
        $data = [
            "data_absen" => Absen::orderBy("id_absen", "ASC")->get(),
            "data_murid" => Murid::orderBy("nama_murid", "ASC")->get(),
        ];

        return view("/pelatih/absen/da ta_absen", $data);
    }

    public function tambah(Request $request)
    {
        
        if ($request->status_absen == 1) {
            $cetak = "Hadir";
        } else if ($request->status_absen == 2 || $request->status_absen == 3 || $request->status_absen == 3 || $request->status_absen == 4) {
            $cetak = $request->keterangan;
        } else {
            $cetak = "Tidak ada";
        }

        Absensi::create([
            "id_users" => auth()->user()->id,
            "tgl_absen" => $request->tgl_absen,
            "status_absen" => $request->status_absen,
            "keterangan" => $cetak,
            "nim_anggota" => $request->nim_anggota
        ]);

        return redirect()->back()->with("sukses", "Data Berhasil di Tambahkan");)
        
    }






    public function hapus(Request $request)
    {
        Absen::where("id", $request->id)->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $data = [
            "edit" => Absen::where("id", $id)->first(),
            "data_absen" => Absen::where("id", "!=", $id)->orderBy("absen_murid", "ASC")->get()
        ];

        return view("/pelatih/absen/edit_absen", $data);
    }

    public function simpan(Request $request)
    {
        Nilai::where("id", $request->id)->update([
            "absen_murid" => $request->absen_murid,
            "tanggal" => $request->status,
            "keterangan" => $request->keterangan

        ]);

        return redirect("/pelatih/absen");
    }
}
