<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helm;

class APIController extends Controller
{
    public function searchhelm(Request $request){
        $cari = $request->input('q');

        $helm = Helm::where('merk', 'LIKE', "%$cari%")->get();

        if($helm->isEmpty())
        {
            return response()->json([
                'success' => false,
                'data' => 'Data tidak ditemukan',
                ],200)->header('Access-Control-Allow-Origin' , 'http://127.0.0.1:5500');
        }
        else
        {
            return response()->json([
                'success' => true,
                'data' => $helm,
                ],200)->header('Access-Control-Allow-Origin' , 'http://127.0.0.1:5500');
        }
    }
}
