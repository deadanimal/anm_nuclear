@extends('layouts.risda-base')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="mb-0 risda-dg"><strong>SEBUTHARGA RFQ</strong></h1>
            <h5 class="risda-dg"></h5>
        </div>
    </div>

    <hr class="risda-g">

    <div class="row">
        <div class="col">
            <h5 class="h3">SEBUTHARGA RFQ</h5>
        </div>
    </div>

    <div class="row justify-content-lg-center mt-3">
        <div class="col-lg-10 ">

            <div class="row">
                <div class="col-lg-4 p-0">
                    <label class="col-form-label">NAMA PELANGGAN:</label>
                </div>
                <div class="col-lg-8">
                    <input class="form-control" name="nama_pelanggan" id="nama_pelanggan">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-4 p-0">
                    <label class="col-form-label"> NO. PERMOHONAN:       NM/RQ/ </label>
                </div>
                <div class="col-lg-8">
                    <input class="form-control" name="no_permohonan" id="no_permohonan">
                </div>
            </div>

        </div>
    </div>

    <div class="row p-6" style="float:right;">
        <div class="col">
            <a href="/pengurusan_kursus/semak_jadual/create" class="btn btn-primary">
                <i class="fas fa-search"></i> Carian
            </a>
        </div>
    </div>

    <!-- <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table datatable table-striped" style="width:100%">
                        <thead class="bg-200">
                            <tr>
                                <th class="sort">BIL.</th>
                                <th class="sort">KOD NAMA KURSUS</th>
                                <th class="sort">NAMA KURSUS</th>
                                <th class="sort">TARIKH KURSUS</th>
                                <th class="sort">TEMPAT KURSUS</th>
                                <th class="sort">BILANGAN PESERTA</th>
                                <th class="sort">STATUS PELAKSANAAN</th>
                                <th class="sort">TINDAKAN</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white" id="t_normal">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> -->
@endsection
