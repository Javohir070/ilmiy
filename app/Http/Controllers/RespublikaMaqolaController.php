<?php

namespace App\Http\Controllers;

use App\Models\XalqaroMaqola;
use Illuminate\Http\Request;

class RespublikaMaqolaController extends Controller
{
    public function index()
    {
        $x_maqola = XalqaroMaqola::where('categoriy', 3)->get();
        return view('admin.respublikamaqola.index',['x_maqola'=>$x_maqola]);
    }
}
