<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelatih;
use File;
use App\Models\User;

class PelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // = SELECT * FROM pelatih;
        $data = [
            "data_pelatih" => Pelatih::all()
        ];

        return view("/admin/pelatih/data_pelatih", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // = SELECT * FROM pelatih;
        $data = [
        "data_pelatih" => Pelatih::all()
    ];

    return view("/admin/pelatih/addpelatih/index", $data);
    }

    public function tambah_data()
    {
        return view("/admin/pelatih/addpelatih");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pelatih::create($request->all());

        User::create([
            "name" => $request->nama_pelatih,
            "email" => $request->nama_pelatih."@gmail.com",
            "password" => bcrypt("pelatih"),
            "id_role" => 1
        ]); 

        return redirect("/admin/pelatih")->with("tambah", "Data Berhasil di Tambahkan");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            "edit" => Pelatih::where("id", $id)->first()
        ];

        

        return view("/admin/pelatih/edit_pelatih", $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $update = Pelatih::where("id", $request->id)->first();

        $update->nama_pelatih = $request->nama_pelatih;
        $update->jenis_kelamin = $request->jenis_kelamin;   
        $update->jenis_tari = $request->jenis_tari;
        $update->no_hp = $request->no_hp;
        $update->alamat = $request->alamat;

        if ($request->file("foto") == "") {

            $update->foto = $update->foto;

        } else {

            File::delete("image/".$update->foto);

            $file = $request->file("foto");
            $fileName = $file->getClientOriginalName();
            $request->file("foto")->move("image", $fileName);
            $update->foto_pelatih = $fileName;
        }

        $update->update();

        return redirect("/admin/pelatih")->with("update", "Data Berhasil di update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pelatih::where("id", $id)->first();

        $nama_pelatih = $data->nama_pelatih;

        Pelatih::where("id", $id)->delete();

        User::where("name", $nama_pelatih)->delete();

        return redirect()->back();
    }
}
