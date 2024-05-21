<?php

namespace App\Http\Controllers;

use App\Models\szavak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class szavakController extends Controller
{
    
    public function index()
    {
        $szavak = szavak::all();
        return response()->json($szavak);
    }
    public function szavakTemaval($temaId){
        return DB:: table('szavaks as s')
       ->where('temaId','=', $temaId)
       ->get();
    }
}
