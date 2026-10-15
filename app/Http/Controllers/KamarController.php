<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kamar;

class KamarController extends Controller
{
    //Fungsi 1:SELECT
    public function getall(){
        //Tanpa menggunakan perintah SQL
        //namamodel::select(kolom)->get();
        $query=kamar::select('id','no_kamar','tipe_kamar')->get();

        //Kembalikan ke view
        //Diwadahi dalam array nama array: kamarhotel
        //view('namablade', ['namaarray' => $query])
        return view('TampilKamar',['kamarhotel'=>$query]);
    }

    //Fungsi 2: INSERT
    public function addKamar(Request $r){
        kamar::insert(
            [
                'no_kamar'=>$r->nk,
                'tipe_kamar'=>$r->tk
            ]
        );
        //return ini tidak mengembalikan apa", tapi langsung mengalihkan halaman ke /select
        return redirect('/select');
    }

    //Fungsi 3: DELETE
    public function deleteKamar(Request $r){
        kamar::where('id',$r->id)->delete();
        return redirect('/select');;
    }

    //Fungsi 4: Tampilkan form EDIT
    public function editKamar($id){
        //Ambil data kamar berdasarkan id yang mau diedit
        $kh=kamar::where('id',$id)->first();

        //Kirim data itu ke view EditKamar supaya form-nya terisi otomatis
        return view('EditKamar',['kh'=>$kh]);
    }

    //Fungsi 5: UPDATE
    public function updateKamar(Request $r,$id){
        kamar::where('id',$id)->update(
            [
                'no_kamar'=>$r->nk,
                'tipe_kamar'=>$r->tk
            ]
        );
        return redirect('/select');
    }
}
