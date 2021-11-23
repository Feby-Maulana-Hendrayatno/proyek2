<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;
use File;
use App\Models\User;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "data_murid" => Murid::all()
        ];

        return view("/admin/murid/data_murid", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // = SELECT * FROM murid;  
 
        return view("/admin/murid/addmurid/index", $data);
    }

    public function tambah_data()
    {
        return view("/admin/murid/addmurid");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Murid::create($request->all());

        User::create([
            "name" => $request->nama_murid,
            "email" => $request->nama_murid."@gmail.com",
            "password" => bcrypt("murid"),
            "id_role" => 2
        ]);
    
        return redirect("admin/murid")->with("tambah", "Data Berhasil di Tambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $data = [
        "edit" => Murid::where("id", $id)->first()
    ];
    
    return view("/admin/murid/edit_murid", $data);
    
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
        $update = Murid::where("id", $request->id)->first();

        $update->nama_murid = $request->nama_murid;
        $update->umur = $request->umur;
        $update->jenis_kelamin = $request->jenis_kelamin;
        $update->no_hp = $request->no_hp;
        $update->alamat = $request->alamat;
        
        
        if ($request->file("foto") == "") {

            $update->foto = $update->foto;

        } else {

            File::delete("image/".$update->foto);
            
            $file = $request->file("foto");
            $fileName = $file->getClientOriginalName();
            $request->file("foto")->move("image", $fileName);
            $update->foto = $fileName;
        }

        $update->update();

        return redirect("/admin/murid")->with("update", "Data Berhasil di update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Murid::where("id", $id)->first();

        $nama_murid = $data->nama_murid;

        Murid::where("id", $id)->delete();

        User::where("name", $nama_murid)->delete();

        return redirect()->back();
    }
}
