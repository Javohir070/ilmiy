<?php

namespace App\Http\Controllers;

use App\Models\XalqaroMaqola;
use Illuminate\Http\Request;

class XalqaroTezisController extends Controller
{
    public function index()
    {
        $x_maqola = XalqaroMaqola::where('categoriy', 2)->get();
        return view('admin.xalqarotezis.index',['x_maqola'=>$x_maqola]);
    }
}
