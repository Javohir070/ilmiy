<?php

namespace App\Http\Controllers;

use App\Models\Guvohnoma;
use App\Http\Requests\StoreGuvohnomaRequest;
use App\Http\Requests\UpdateGuvohnomaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuvohnomaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $guvohnoma = Guvohnoma::all();
        return view('admin.guvohnoma.index', ['guvohnoma'=>$guvohnoma]);
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
         
        Guvohnoma::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'tashkilot_name' => $request->tashkilot_name,
            'sana' => $request->sana,
            'file' => $path ?? null
        ]);

        return redirect('/guvohnoma');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guvohnoma $guvohnoma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guvohnoma $guvohnoma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuvohnomaRequest $request, Guvohnoma $guvohnoma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guvohnoma $guvohnoma)
    {
        if(isset($guvohnoma->file)){
            Storage::delete($guvohnoma->file);
        }
        $guvohnoma->delete();

        return redirect('/guvohnoma');
    }
}
