<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Attribute;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index() {

        $data = Peserta::all();
        return view('peserta', compact('data'));
    }

    public function tambahpeserta() {
        return view('tambahpeserta');
    }

    public function insertpeserta(Request $request) {
        Peserta::create($request->all());
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Ditambah!');
    }

    public function tampilpeserta($id) {
        $data = Peserta::find($id);
        return view('tampilpeserta', compact('data'));
    }

    public function updatepeserta(Request $request, $id) {
        $data = Peserta::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Diupdate!');
    }

    public function deletepeserta($id) {
        $data = Peserta::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Dihapus!');
    }

    public function detailpeserta($id) {
        $data = Peserta::find($id);
        $collected = collect($data);
        $nilai_intel = (0.4 * $collected['nilai_X']) + (0.6 * $collected['nilai_Y']);
        $nilai_num_ab = (0.3 * $collected['nilai_Z']) + (0.7 * $collected['nilai_W']);
        return view('detailpeserta', compact('data','nilai_intel','nilai_num_ab'));
    }
}
