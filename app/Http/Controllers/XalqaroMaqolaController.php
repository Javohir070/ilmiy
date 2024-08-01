<?php

namespace App\Http\Controllers;

use App\Models\XalqaroMaqola;
use App\Http\Requests\StoreXalqaroMaqolaRequest;
use App\Http\Requests\UpdateXalqaroMaqolaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class XalqaroMaqolaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $x_maqola = XalqaroMaqola::where('categoriy', 1)->get();
        return view('admin.xalqaromaqola.index',['x_maqola' => $x_maqola]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->has('file'))
        {
            $name = $request->file('file')->getClientOriginalName();
            $path = $request->file('file')->storeAs('maqola-file', $name);
        }

        XalqaroMaqola::create([
            'user_id' => auth()->id(),
             'title' => $request->title,
             'ishtirokchilar' => $request->ishtirokchilar,
             'jurnal' => $request->jurnal,
             'link' => $request->link,
             'categoriy' => $request->categoriy,
             'yil' => $request->yil,
             'file' => $path ?? null
        ]);
        if ($request->categoriy == 2) {
            return redirect("/xalqaro-tezis");
        }elseif($request->categoriy == 3){
            return redirect("/respublika-maqola");
        }elseif($request->categoriy == 4){
            return redirect("/respublika-tezis");
        }
        return redirect("/xalqromaqola");
    }

    /**
     * Display the specified resource.
     */
    public function show(XalqaroMaqola $xalqaroMaqola)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(XalqaroMaqola $xalqaroMaqola)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateXalqaroMaqolaRequest $request, XalqaroMaqola $xalqaroMaqola)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(XalqaroMaqola $xalqromaqola)
    {
        if(isset($xalqromaqola->file)){
            Storage::delete($xalqromaqola->file);
        }
        $xalqromaqola->delete();

        return redirect('/xalqromaqola');
    }
}
