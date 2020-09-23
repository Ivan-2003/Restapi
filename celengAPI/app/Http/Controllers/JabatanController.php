<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jabatan;

class JabatanController extends Controller
{
    public function index(){
        return jabatan::all();
    }
    public function create(Request $request){
        $jabatan = new jabatan();
        $jabatan->nama_jabatan = $request->nama_jabatan;
        $jabatan->save();

        return "data berhasil disimpan Suuu!!!";
    }

    public function update(Request $request, $id){
        $nama_jabatan = $request->nama_jabatan;

        $jabatan = jabatan::find($id);
        $jabatan->nama_jabatan = $nama_jabatan;
        $jabatan->save();

        return "data berhasil di update Suuu!!!";
    }

    public function delete($id){
        $jabatan = jabatan::find($id);
        $jabatan->delete();

        return "data berhasil di delete Suuu!!!";
    }
}
