<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSebutHargaRequest;
use App\Http\Requests\UpdateSebutHargaRequest;
use App\Models\SebutHarga;

class SebutHargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Sebutharga.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSebutHargaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSebutHargaRequest $request)
    {
        $SebutHarga = new SebutHarga;
        $SebutHarga->JenisMohon=$request->JenisMohon;
        $SebutHarga->Nama=$request->Nama;
        $SebutHarga->User=$request->user()->id;
        $SebutHarga->NoHP=$request->NoHP;
        $SebutHarga->Catatan=$request->Catatan;

        $SebutHarga-> save();
        return $SebutHarga->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SebutHarga  $sebutHarga
     * @return \Illuminate\Http\Response
     */
    public function show($sebutHarga)
    {
        $data = SebutHarga::where('id',$sebutHarga)->get();
        return $data;
    }

    public function RFQ(SebutHarga $sebutHarga)
    {
        return view('sebuthargaRFQ.index');
    }

    public function list(SebutHarga $sebutHarga)
    {
        return view('sebuthargaList.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SebutHarga  $sebutHarga
     * @return \Illuminate\Http\Response
     */
    public function edit(SebutHarga $sebutHarga)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSebutHargaRequest  $request
     * @param  \App\Models\SebutHarga  $sebutHarga
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSebutHargaRequest $request, SebutHarga $sebutHarga)
    {
        $sebutHarga->TajukAttachment = $request->TajukAttachment;
        $sebutHarga->CatatanAttachment = $request->CatatanAttachment;
        $sebutHarga->save();
        return $sebutHarga;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SebutHarga  $sebutHarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(SebutHarga $sebutHarga)
    {
        //
    }
}
