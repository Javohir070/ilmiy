<?php

namespace App\Http\Controllers;

use App\Models\Ixtiro;
use App\Http\Requests\StoreIxtiroRequest;
use App\Http\Requests\UpdateIxtiroRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IxtiroController extends Controller
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

        $ixtiro = Ixtiro::where('categoriy', 1)->get();
        return view('admin.ixtiro.index', ['ixtiro'=>$ixtiro]);
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

        Ixtiro::create([
           'user_id' => auth()->id(),
           'name' => $request->name,
           'sana' => $request->sana,
           'categoriy' => $request->categoriy,
           'mualliflar_soni' => $request->mualliflar_soni,
           'guvohnoma_raqami' => $request->guvohnoma_raqami,
           'mualliflari' => $request->mualliflari,
            'file' => $path ?? null
        ]);
        if($request->categoriy == 2){
            return redirect('/foydalimodel');
        }
        return redirect('/ixtiro');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ixtiro $ixtiro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ixtiro $ixtiro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIxtiroRequest $request, Ixtiro $ixtiro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ixtiro $ixtiro)
    {
        if(isset($ixtiro->file)){
            Storage::delete($ixtiro->file);
        }
        $ixtiro->delete();

        return redirect('/ixtiro');
    }
}
