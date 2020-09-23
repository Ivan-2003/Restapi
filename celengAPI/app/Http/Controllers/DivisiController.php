<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\divisi;

class DivisiController extends Controller
{
    public function index(){
        return divisi::all();
    }
    public function create(Request $request){
        $divisi = new divisi();
        $divisi->nama_divisi = $request->nama_divisi;
        $divisi->save();

        return "data berhasil disimpan Suuu!!!";
    }

    public function update(Request $request, $id){
        $nama_divisi = $request->nama_divisi;

        $divisi = divisi::find($id);
        $divisi->nama_divisi = $nama_divisi;
        $divisi->save();

        return "data berhasil di update Suuu!!!";
    }

    public function delete($id){
        $divisi = divisi::find($id);
        $divisi->delete();

        return "data berhasil di delete Suuu!!!";
    }
}
