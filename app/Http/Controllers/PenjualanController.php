<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    public function home(){
        $penjualan = Penjualan::paginate(6);
        return view('penjualan.index',compact('penjualan'));
    }

    public function tambah(){
        return view('penjualan.form');
    }
    public function simpan(Request $request){
        $data = [
            'periode' => request()->periode,
            'gs' => request()->gs,
            'vitra' => request()->vitra,
            'incoe' => request()->incoe,
            'rca' => request()->rca,
        ];

        Penjualan::create($data);
        return redirect()->route('penjualan');
    }
    public function edit($id){
        $penjualan= Penjualan::find($id)->first();
        return view('penjualan.form',['penjualan'=>$penjualan]);
    }

    public function update($id, Request $request){
        $data = [
            'periode' => request()->periode,
            'gs' => request()->gs,
            'vitra' => request()->vitra,
            'incoe' => request()->incoe,
            'rca' => request()->rca,
        ];

        Penjualan::find($id)->update($data);
        return redirect()->route('penjualan');
    }

    public function hapus($id){
        Penjualan::find($id)->delete();
        return redirect()->route('penjualan');
    }

    public function grafik(){
        return view('grafik.grafik');
    }

}
