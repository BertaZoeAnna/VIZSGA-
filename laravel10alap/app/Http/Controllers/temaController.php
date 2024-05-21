<?php

namespace App\Http\Controllers;

use App\Models\tema;
use Illuminate\Http\Request;

class temaController extends Controller
{
    public function index()
    {
        $temak = tema::all();
        return response()->json($temak);
    }
}
