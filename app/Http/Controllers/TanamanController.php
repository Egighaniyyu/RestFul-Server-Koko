<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use Illuminate\Http\Request;

class TanamanController extends Controller
{
    public function index()
    {
        return Tanaman::all();
    }

    public function create(Request $request)
    {
        $tanaman = new Tanaman;
        $tanaman->nama_tanaman = $request->nama_tanaman;
        $tanaman->deskripsi = $request->deskripsi;
        $tanaman->stok = $request->stok;
        $tanaman->harga = $request->harga;
        $tanaman->save();

        return "Data Berhasil masuk";
    }

    public function update(Request $request, $id)
    {
        $nama_tanaman = $request->nama_tanaman;
        $deskripsi = $request->deskripsi;
        $stok = $request->stok;
        $harga = $request->harga;

        $tanaman = Tanaman::find($id);
        $tanaman->nama_tanaman = $nama_tanaman;
        $tanaman->deskripsi = $deskripsi;
        $tanaman->stok = $stok;
        $tanaman->harga = $harga;
        $tanaman->save();

        return "Data Berhasil di update";
    }

    public function delete($id)
    {
        $tanaman = Tanaman::find($id);
        $tanaman->delete();

        return "Data berhasil dihapus";
    }
}
