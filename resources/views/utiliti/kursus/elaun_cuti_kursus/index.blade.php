@extends('layouts.risda-base')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="mb-0 risda-dg"><strong>UTILITI</strong></h1>
            <h5 class="risda-dg">ELAUN/CUTI KURSUS</h5>
        </div>
    </div>

    <hr class="risda-g">

    <div class="row mt-5">
        <div class="col">
            <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tambah-negeri">
                <i class="fas fa-plus"></i> TAMBAH
            </button>
            <div class="modal fade" id="tambah-negeri" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content position-relative">
                        <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                            <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0">
                            <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                                <h4 class="mb-1" id="modalExampleDemoLabel">TAMBAH </h4>
                            </div>
                            <div class="p-4 pb-0">
                                <form action="/utiliti/kursus/elaun_cuti_kursus" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="col-form-label">KATEGORI KURSUS</label>
                                        <select class="form-select" name="kod_Kategori_Kursus_Elaun">
                                            <option selected="" hidden>Sila Pilih</option>
                                            @foreach ($kategori as $kat)
                                                <option value="{{ $kat->id }}">{{ $kat->nama_Kategori_Kursus }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">JENIS</label>
                                        <select class="form-select" name="jenis_Elaun">
                                            <option selected="" hidden>Sila Pilih</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">KOD</label>
                                        <input class="form-control" type="number" name="kod_Elaun_Kursus"
                                            value="{{ $bil }}" readonly />
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">KETERANGAN</label>
                                        <textarea class="form-control" rows="3" name="keterangan_Elaun"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">AMAUN</label>
                                        <input class="form-control" type="number" name="amaun_Elaun" placeholder="RM" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">STATUS</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="status" />
                                            <label class="form-check-label">Aktif</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button class="btn btn-primary" type="submit">Simpan </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table id="table_negeri" class="table datatable table-striped" style="width:100%">
                        <thead class="bg-200">
                            <tr>
                                <th class="sort">BIL.</th>
                                <th class="sort">KATEGORI</th>
                                <th class="sort">JENIS</th>
                                <th class="sort">KOD</th>
                                <th class="sort">KETERANGAN</th>
                                <th class="sort">STATUS</th>
                                <th class="sort">TINDAKAN</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($elaunCuti as $key => $ec)
                                <tr>
                                    <td>{{ $key + 1 }}.</td>
                                    <td>{{ $ec->nama_Kategori_Kursus }}</td>
                                    <td>{{ $ec->jenis_Elaun }}</td>
                                    <td>{{ $ec->kod_Elaun_Kursus }}</td>
                                    <td>{{ $ec->keterangan_Elaun }}</td>
                                    <td>
                                        @if ($ec->status_Elaun == '1')
                                            <span class="badge badge-soft-success">Aktif</span>
                                        @else
                                            <span class="badge badge-soft-danger">Tidak Aktif</span>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                            data-bs-target="#edit_gp_{{ $ec->id }}"><i
                                                class="fas fa-pen"></i></button>
                                        <button class="btn risda-bg-dg text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#delete_gp_{{ $ec->id }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <div class="modal fade" id="edit_gp_{{ $ec->id }}" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document"
                                        style="max-width: 500px">
                                        <div class="modal-content position-relative">
                                            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                                                <button
                                                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-0">
                                                <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                                                    <h4 class="mb-1">KEMASKINI
                                                    </h4>
                                                </div>
                                                <div class="p-4 pb-0">
                                                    <form action="/utiliti/kursus/gred_pegawai/{{ $ec->id }}" method="POST">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label class="col-form-label">KATEGORI KURSUS</label>
                                                            <select class="form-select" name="kod_Kategori_Kursus_Elaun">
                                                                <option selected="" hidden value="{{$ec->kod_Kategori_Kursus_Elaun}}">{{ $ec->nama_Kategori_Kursus }}</option>
                                                                @foreach ($kategori as $kat2)
                                                                    <option value="{{ $kat->id }}">
                                                                        {{ $kat->nama_Kategori_Kursus }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="col-form-label">JENIS</label>
                                                            <select class="form-select" name="jenis_Elaun">
                                                                <option selected="" hidden value="{{ $ec->jenis_Elaun }}">{{ $ec->jenis_Elaun }}</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="col-form-label">KOD</label>
                                                            <input class="form-control" type="number"
                                                                name="kod_Elaun_Kursus" value="{{ $ec->kod_Elaun_Kursus }}"
                                                                readonly />
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="col-form-label">KETERANGAN</label>
                                                            <textarea class="form-control" rows="3"
                                                                name="keterangan_Elaun">{{ $ec->keterangan_Elaun }}</textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="col-form-label">AMAUN</label>
                                                            <input class="form-control" type="number" name="amaun_Elaun"
                                                                value="{{ $ec->amaun_Elaun }}" />
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="col-form-label">STATUS</label>
                                                            <div class="form-check form-switch">
                                                                @if ($ec->status_Elaun == '1')
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="status" checked="" />
                                                                    <label class="form-check-label">Aktif</label>
                                                                @else
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="status" />
                                                                    <label class="form-check-label">Aktif</label>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <button class="btn btn-primary" type="submit">Simpan </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="delete_gp_{{ $ec->id }}" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document"
                                        style="max-width: 500px">
                                        <div class="modal-content position-relative">
                                            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                                                <button
                                                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-0">
                                                <div class="row">
                                                    <div class="col text-center m-3">
                                                        <i class="far fa-times-circle fa-7x" style="color: #ea0606"></i>
                                                        <br>
                                                        Anda pasti untuk menghapus elaun {{ $ec->kod_Elaun_Kursus }}?

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <form method="POST" action="/utiliti/kursus/elaun_cuti_kursus/{{ $ec->id }}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-primary" type="submit">Hapus
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#table_negeri').DataTable();
        });
    </script>
@endsection
