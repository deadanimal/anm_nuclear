<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePesananRequest;
use App\Http\Requests\UpdatePesananRequest;
use App\Models\Pesanan;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('pesanan.index');
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
     * @param  \App\Http\Requests\StorePesananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePesananRequest $request)
    {
        $pesanan =  Pesanan::create($request->all());
        return $pesanan;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesanan $pesanan)
    {

      $jumlah = 0;
      foreach($pesanan->sebut_harga->sebut_harga_item as $item) {
        $jumlah = $jumlah + $item->AmaunProduk * $item->KuantitiProduk;

      };
      $context = [
        "pesanan" => $pesanan,
        "jumlah" =>$jumlah
      ];
      

      return view('pesanan.edit', $context);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePesananRequest  $request
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePesananRequest $request, Pesanan $pesanan)
    {

      $pesanan->update($request->all());
      return redirect('kelulusan_pesanan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesanan $pesanan)
    {
        //
    }

    public function ListviewPesanan() {
      $pesanan_data = Pesanan::all();
//      dd($pesanan_data);
      $context = [
        "pesanans" => $pesanan_data
      ];
      return view('pesanan.index_kelulusan', $context);

    }
}
