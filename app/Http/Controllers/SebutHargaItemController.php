<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSebutHargaItemRequest;
use App\Http\Requests\UpdateSebutHargaItemRequest;
use App\Models\SebutHargaItem;

class SebutHargaItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreSebutHargaItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSebutHargaItemRequest $request)
    {
        $SebutHargaItem = new SebutHargaItem;
        $SebutHargaItem->PusatKhidmat=$request->PusatKhidmat;
        $SebutHargaItem->SebutHargaId=$request->SebutHargaId;
        $SebutHargaItem->NamaKhidmat=$request->NamaProduk;
        $SebutHargaItem->KuantitiProduk=$request->KuantitiProduk;
        $SebutHargaItem->AmaunProduk=$request->AmaunProduk;

        $SebutHargaItem->save();
        return $SebutHargaItem;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SebutHargaItem  $sebutHargaItem
     * @return \Illuminate\Http\Response
     */
    public function show($sebutHargaItem)
    {
        return SebutHargaItem::where('SebutHargaId', $sebutHargaItem)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SebutHargaItem  $sebutHargaItem
     * @return \Illuminate\Http\Response
     */
    public function edit(SebutHargaItem $sebutHargaItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSebutHargaItemRequest  $request
     * @param  \App\Models\SebutHargaItem  $sebutHargaItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSebutHargaItemRequest $request, SebutHargaItem $sebutHargaItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SebutHargaItem  $sebutHargaItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(SebutHargaItem $sebutHargaItem)
    {
        //
    }
}
