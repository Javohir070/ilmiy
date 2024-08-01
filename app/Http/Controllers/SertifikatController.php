<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;
use App\Http\Requests\StoreSertifikatRequest;
use App\Http\Requests\UpdateSertifikatRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SertifikatController extends Controller
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
        $sertifikat = Sertifikat::all();
        return view('admin.sertifikat.index',['sertifikat' => $sertifikat]);
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
            $path = $request->file('file')->storeAs('maqola-file', $name);
        }
         
        Sertifikat::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'tashkilot_name' => $request->tashkilot_name,
            'sana' => $request->sana,
            'file' => $path ?? null
        ]);

        return redirect('/sertifikat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSertifikatRequest $request, Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sertifikat $sertifikat)
    {
        if(isset($sertifikat->file)){
            Storage::delete($sertifikat->file);
        }
        $sertifikat->delete();

        return redirect('/sertifikat');
    }
}
