<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;
use File;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // = SELECT * FROM role;
        $data = [
            "data_role" => Roles::all()
        ];

        return view("/admin/role", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // = SELECT * FROM role;
        $data = [
        "data_role" => Roles::all()
    ];

    return view("/admin/role/addrole/role", $data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $simpan = Roles::create($request->all());
        $simpan->save();

        return redirect("/role")->with("tambah", "Data Berhasil di Tambahkan"); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            "edit" => Roles::where("id_role", $id)->first()
        ];
        
        return view("/admin/role/edit_role", $data);
        
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
        Roles::where("id_role", $request->id_role)->update([
            "nama_role" => $request->nama_role
        ]);

        return redirect("/role")->with("update", "Data Berhasil di update");
    }

    /**
     * Remove t he specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_role)
    {
        $hapus = Roles::where("id_role", $id_role)->first();

        Roles::where("id_role", $id_role)->delete();

        return redirect()->back();
    }
}
    