@extends('layouts.risda-base')
@section('content')
    <div class="row">
        <div class="col">
            <a class="risda-dg">MAKLUMAT TERPERINCI</a> <a class="risda-dg">
                <h1 class="mb-0 risda-dg"><strong>KELULUSAN PESANAN</strong></h1>
        </div>
    </div>

    <hr class="risda-g">
    <div class="card">

        <div class="card-body">
            <div id="pesanan_step2">

                <div class="row mt-3 justify-content-center">

                    <div class="col-6">
                        <label class="col-form-label">NAMA PELANGGAN :</label>
                    </div>
                    <div class="col-5">
                        <input class="form-control" name="JenisPesanan"
                            value="{{ $pesanan->sebut_harga->pelanggan->name }}" readonly>
                    </div>
                </div>
                <div class="row mt-3 justify-content-center">

                    <div class="col-6">
                        <label class="col-form-label">JENIS PESANAN :</label>
                    </div>
                    <div class="col-5">
                        <input class="form-control" name="NoPesanan" value="{{ $pesanan->JenisPesanan }}" readonly>
                    </div>


                </div>



            </div>
            <div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">NO PESANAN :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" name="NoPesanan" value="{{ $pesanan->NoPesanan }}" readonly>
                </div>


            </div>

            <div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">NO SEBUTHARGA :</label>
                </div>
                <div class="col-5">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">NM/QUO/</span>
                        </div>
                        <input type="text" name="SebutHargaId" class="form-control" id="basic-url"
                            aria-describedby="basic-addon3" value="{{ $pesanan->SebutHargaId }}" readonly>
                    </div>

                </div>


            </div>


            <div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">TARIKH PESANAN :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" name="TarikhPesanan" type="date" value="{{ $pesanan->TarikhPesanan }}"
                        readonly>
                </div>


            </div>







        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4><strong>MAKLUMAT PESANAN</strong></h4>
                </div>

                <div class="card-body">
                    <table class="table datatable table-striped" style="width:100%">
                        <thead class="bg-200">
                            <tr>
                                <th>BIL.</th>
                                <th>NAMA KHIDMAT/PRODUK</th>
                                <th>UNIT HARGA(RM)</th>
                                <th>AMAUN(RM)</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white" id="t_normal">
                            @foreach ($pesanan->sebut_harga->sebut_harga_item as $item)
                                <tr onclick="clickRow({{ $pesanan }})">
                                    <td>{{ $loop->index + 1 }}.</td>
                                    <td>{{ $item->NamaKhidmat }}</td>
                                    <td>{{ $item->AmaunProduk }}</td>
                                    <td>{{ $item->AmaunProduk * $item->KuantitiProduk }}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>

            </div>
        </div>
        <div class="row mt-3 justify-content-center">

            <div class="col-6">
                <label class="col-form-label">JUMLAH (RM):</label>
            </div>
            <div class="col-5">
                <input class="form-control" name="jumlah_pesanan" value="{{ $jumlah }}" readonly>
            </div>


        </div>


    </div>


    <div class="card mt-5">
        <div class="card-header">
            <h4><strong>UNTUK DISEMAK PELULUS</strong></h4>
        </div>
        <div class="card-body">


            <form action="/pesanan/{{ $pesanan->id }}" method="POST" id="form_add">
                @method('PUT')
                @csrf
                <div class="row mt-3 justify-content-center">

                    <div class="col-6">
                        <label class="col-form-label">TINDAKAN :</label>
                    </div>
                    <div class="col-5">
                        <input class="form-control" name="Tindakan">
                    </div>
                </div>
                <div class="row mt-3 justify-content-center">

                    <div class="col-6">
                        <label class="col-form-label">PENJANA KAD KERJA :</label>
                    </div>
                    <div class="col-5">
                        <input class="form-control" name="PenjanaKadKerja">
                    </div>
                </div>

                <div class="row mt-3 justify-content-center">

                    <div class="col-6">
                        <label class="col-form-label">CATATAN :</label>
                    </div>
                    <div class="col-5">
                        <input class="form-control" name="Catatan">
                    </div>
                </div>
                <div class="col text-end mt-3">
                    <button type="submit" class="risda-dg btn btn-primary">HANTAR</button>
                </div>


            </form>





        </div>
    </div>





@endsection
