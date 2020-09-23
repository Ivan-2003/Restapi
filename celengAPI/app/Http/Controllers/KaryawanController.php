<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\karyawan;

class KaryawanController extends Controller
{
    public function index(){
        return karyawan::all();
    }
    public function create(Request $request){
        $karyawan = new karyawan();
        $karyawan->nik = $request->nik;
        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->alamat_karyawan = $request->alamat_karyawan;
        $karyawan->nomer_telepon = $request->nomer_telepon;
        $karyawan->divisi = $request->divisi;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->status = $request->status;
        $karyawan->save();

        return "data berhasil disimpan Cukkk!!!";
    }

    public function update(Request $request, $id){
        $nik = $request->nik;
        $nama_karyawan = $request->nama_karyawan;
        $alamat_karyawan = $request->alamat_karyawan;
        $nomer_telepon = $request->nomer_telepon;
        $divisi = $request->divisi;
        $jabatan = $request->jabatan;
        $status = $request->status;

        $karyawan = karyawan::find($id);
        $karyawan->nik = $nik;
        $karyawan->nama_karyawan = $nama_karyawan;
        $karyawan->alamat_karyawan = $alamat_karyawan;
        $karyawan->nomer_telepon = $nomer_telepon;
        $karyawan->divisi = $divisi;
        $karyawan->jabatan = $jabatan;
        $karyawan->status = $status;
        $karyawan->save();

        return "data berhasil di update Cukkk!!!";
    }

    public function delete($id){
        $karyawan = karyawan::find($id);
        $karyawan->delete();

        return "data berhasil di delete Cukkk!!!";
    }
}
