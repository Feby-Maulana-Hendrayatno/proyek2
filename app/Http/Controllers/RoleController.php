<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $data = [
            "data_kategori_tari" => Role::orderBy("nama_kategori_tari", "ASC")->get()
        ];

        return view("/admin/kategori_tari/data_kategori_tari", $data);
    }

    public function tambah(Request $request)
    {
        Role::create($request->all());

        return redirect()->back();
    }

    public function hapus(Request $request)
    {
        Role::where("id", $request->id)->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $data = [
            "edit" => Role::where("id", $id)->first(),
            "data_role" => Role::where("id", "!=", $id)->orderBy("nama_kategori_tari", "ASC")->get()
        ];

        return view("/pelatih/kategori_tari/edit_kategori_tari", $data);
    }

    public function simpan(Request $request)
    {
        Role::where("id", $request->id)->update([
            "nama_kategori_tari" => $request->nama_kategori_tari
        ]);

        return redirect("/pelatih/kategori_tari");
    }
}
    