<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    function tambah(){
        return view('barang.tambah');
    }

    function simpan(Request $request){
        $request->validate([
            'barang'=>'required|min:2|max:16',
            'harga'=>'required|numeric',
        ],[
            'barang.required'=>'Error : code 01 barang harus di isi',
            'barang.min'=>'Error : code 02 jumlah barang minimal 2',
            'barang.max'=>'Error : code 03 jumlah barang maksimal 16',
            'harga.required'=>'Error code 04 harga harus di isi',
            'jumlah.required'=>'Error code 05 jumlah barang harus di isi',
            'tgl_masuk.required'=>'Error code 06 tanggal masuk harus di isi',
        ]);

        $data = [
            'barang'=>$request->barang,
            'merek'=>$request->merek,
            'jumlah'=>$request->jumlah,
            'harga'=>$request->harga,
            'tgl_masuk'=>$request->tgl_masuk,
            'deskripsi'=>$request->deskripsi,
        ];

        return view('barang.simpan',$data);
    }
}
