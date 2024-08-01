<?php

namespace App\Http\Controllers;

use App\Models\Ixtiro;
use Illuminate\Http\Request;

class FoydaliModelController extends Controller
{
    public function index()
    {
        $foyda = Ixtiro::where('categoriy', 2)->get();
        return view('admin.foyda.index',['foyda'=>$foyda]);
    }
}
