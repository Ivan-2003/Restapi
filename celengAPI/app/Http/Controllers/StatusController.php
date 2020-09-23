<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;

class StatusController extends Controller
{
    public function index(){
        return status::all();
    }
    public function create(Request $request){
        $status = new status();
        $status->nama_status = $request->nama_status;
        $status->save();

        return "data berhasil disimpan Suuu!!!";
    }

    public function update(Request $request, $id){
        $nama_status = $request->nama_status;

        $status = status::find($id);
        $status->nama_status = $nama_status;
        $status->save();

        return "data berhasil di update Suuu!!!";
    }

    public function delete($id){
        $status = status::find($id);
        $status->delete();

        return "data berhasil di delete Suuu!!!";
    }
}
