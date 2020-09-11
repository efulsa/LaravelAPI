<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(){
        return Siswa::all();
    }
    public function create(Request $request){
        $siswa = new Siswa;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return "Data Siswa Berhasil Ditambahkan";
    }
    public function update(Request $request, $id){
        $siswa = Siswa::findOrFail($id);
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return "Data Siswa Berhasil Diubah";
    }
    public function delete($id){
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return "Data Siswa Berhasil Dihapus";
    }
}
