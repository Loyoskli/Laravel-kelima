<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kamar;

class KamarService extends Controller
{
    //testing
    public function testAPI(){
        return response()->json(
            [
                'status' => 1,
                'id' => 'A1'
            ], 200
        );
    }


//Fungsi 1:SELECT
    public function getall(){
        $query=kamar::select('id','no_kamar','tipe_kamar')->get();
        return response()->json($query,200,array(), JSON_PRETTY_PRINT);
    }
//Fungsi 2: INSERT
    public function addKamar(Request $r){
        kamar::insert(
            [
                'no_kamar'=>$r->nk,
                'tipe_kamar'=>$r->tk
            ]
        );
        return response()->json([
            'status' => 1
        ], 200);
    }
}
