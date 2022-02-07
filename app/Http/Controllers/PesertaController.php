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
        $validated = $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required|email:rfc,dns',
            'nilai_x' => 'required|integer|between:1,33',
            'nilai_y' => 'required|integer|between:1,23',
            'nilai_z' => 'required|integer|between:1,18',
            'nilai_w' => 'required|integer|between:1,13',
        ]);
        Peserta::create($request->all());
        return redirect()->route('peserta')->with('success', 'Data Berhasil Ditambah!');
    }

    public function tampilpeserta($id) {
        $data = Peserta::find($id);
        return view('tampilpeserta', compact('data'));
    }

    public function updatepeserta(Request $request, $id) {
        $validated = $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required|email:rfc,dns',
            'nilai_x' => 'required|integer|between:1,33',
            'nilai_y' => 'required|integer|between:1,23',
            'nilai_z' => 'required|integer|between:1,18',
            'nilai_w' => 'required|integer|between:1,13',
        ]);
        
        $data = Peserta::find($id);
        $data->update($request->all());
        return redirect()->route('peserta')->with('success', 'Data Berhasil Diupdate!');
    }

    public function deletepeserta($id) {
        $data = Peserta::find($id);
        $data->delete();
        return redirect()->route('peserta')->with('success', 'Data Berhasil Dihapus!');
    }

    public function detailpeserta($id) {
        $data = Peserta::find($id);
        $collected = collect($data);
        $nilai_intel = ((0.4 * $collected['nilai_x']) + (0.6 * $collected['nilai_y']))/2;
        $nilai_num_ab = ((0.3 * $collected['nilai_z']) + (0.7 * $collected['nilai_w']))/2;
        $max_x = 33;
        $max_y = 23;
        $max_z = 18;
        $max_w = 13;
        $max_nilai_intel = ((0.4 * $max_x) + (0.6 * $max_y))/2;
        $max_nilai_num_ab = ((0.3 * $max_z) + (0.7 * $max_w))/2;
        $range_intel = $max_nilai_intel/5;
        $range_num_ab = $max_nilai_num_ab/5;
        $arr_range_intel = [];
        $arr_range_num_ab = [];
        for ($i = 0; $i < 5; $i++) { 
            array_push($arr_range_intel,$range_intel);
            array_push($arr_range_num_ab,$range_num_ab);
            $range_intel += $max_nilai_intel/5;
            $range_num_ab += $max_nilai_num_ab/5;
        }
        return view('detailpeserta', compact('data','nilai_intel','nilai_num_ab', 'arr_range_intel', 'arr_range_num_ab'));
    }
}
