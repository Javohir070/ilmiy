<?php

namespace App\Http\Controllers;

use App\Models\XalqaroMaqola;
use Illuminate\Http\Request;

class RespublikaTezisController extends Controller
{
    public function index()
    {
        $x_maqola = XalqaroMaqola::where('categoriy', 4)->get();
        return view('admin.respublikatezis.index',['x_maqola'=>$x_maqola]);
    }
}
