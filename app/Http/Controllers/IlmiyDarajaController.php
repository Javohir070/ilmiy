<?php

namespace App\Http\Controllers;

use App\Models\IlmiyDaraja;
use App\Http\Requests\StoreIlmiyDarajaRequest;
use App\Http\Requests\UpdateIlmiyDarajaRequest;
use Illuminate\Http\Request;

class IlmiyDarajaController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:view role', ['only' => ['index']]);
        $this->middleware('permission:create role', ['only' => ['create','store','addPermissionToRole','givePermissionToRole']]);
        $this->middleware('permission:update role', ['only' => ['update','edit']]);
        $this->middleware('permission:delete role', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $i_daraja = IlmiyDaraja::all();

        return view('admin.ilmiydaraja.index',['i_daraja'=>$i_daraja]);
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

        IlmiyDaraja::create([
            "user_id" => auth()->id(),
            "ilmiy_daraja_nomi" => $request->ilmiy_daraja_nomi,
            "sana" => $request->sana,
            "regis_raqami" => $request->regis_raqami,
            "kim_tom_berilgan" => $request->kim_tom_berilgan
        ]);

        return redirect('/ilmiydaraja');
    }

    /**
     * Display the specified resource.
     */
    public function show(IlmiyDaraja $ilmiyDaraja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IlmiyDaraja $ilmiyDaraja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIlmiyDarajaRequest $request, IlmiyDaraja $ilmiyDaraja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IlmiyDaraja $ilmiydaraja)
    {
        $ilmiydaraja->delete();

        return redirect('/ilmiydaraja');
    }
}
