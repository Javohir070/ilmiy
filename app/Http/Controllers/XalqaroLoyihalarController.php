<?php

namespace App\Http\Controllers;

use App\Models\XalqaroLoyihalar;
use App\Http\Requests\StoreXalqaroLoyihalarRequest;
use App\Http\Requests\UpdateXalqaroLoyihalarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class XalqaroLoyihalarController extends Controller
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
        $x_loyiha = XalqaroLoyihalar::where('categoriy', 1)->get();

        return view('admin.xalqaroloyihalar.index',['x_loyiha'=>$x_loyiha]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->has('file'))
        {
            $name = $request->file('file')->getClientOriginalName();
            $path = $request->file('file')->storeAs('maqola-loyiha', $name);
        }

        XalqaroLoyihalar::create([
            "user_id" => auth()->id(),
            "categoriy" => $request->categoriy,
            "loyih_name" => $request->name,
            "loyiha_raqami" => $request->loyiha_raqami,
            "lavozimi" => $request->lavozimi,
            "start_date" => $request->start_date,
            "end_date" => $request->end_date,
            "start_user_date" => $request->start_user_date,
            "end_user_date" => $request->end_user_date,
            "file" => $path ?? null
        ]);
        if ($request->categoriy == 2) {
            return redirect("/davlat-ilmiy");
        }elseif($request->categoriy == 3){
            return redirect("/xojalik");
        }elseif($request->categoriy == 4){
            return redirect("/tijoratlashtirish");
        }
        return redirect('/xalqaroloyihalar');
    }

    /**
     * Display the specified resource.
     */
    public function show(XalqaroLoyihalar $xalqaroLoyihalar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(XalqaroLoyihalar $xalqaroLoyihalar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateXalqaroLoyihalarRequest $request, XalqaroLoyihalar $xalqaroLoyihalar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(XalqaroLoyihalar $xalqaroloyihalar)
    {
        if(isset($xalqaroloyihalar->file)){
            Storage::delete($xalqaroloyihalar->file);
        }
        $xalqaroloyihalar->delete();

        return redirect('/xalqaroloyihalar');
    }

    public function davlat_ilmiy()
    {
        $x_loyiha = XalqaroLoyihalar::where('categoriy', 2)->get();

        return view('admin.xalqaroloyihalar.davlat_ilmiy',['x_loyiha'=>$x_loyiha]);
        
    }

    public function xojalik()
    {
        $x_loyiha = XalqaroLoyihalar::where('categoriy', 3)->get();

        return view('admin.xalqaroloyihalar.xojalik',['x_loyiha'=>$x_loyiha]);
        
    }

    public function tijoratlashtirish()
    {
        $x_loyiha = XalqaroLoyihalar::where('categoriy', 4)->get();

        return view('admin.xalqaroloyihalar.tijoratlashtirish',['x_loyiha'=>$x_loyiha]);
        
    }
}
