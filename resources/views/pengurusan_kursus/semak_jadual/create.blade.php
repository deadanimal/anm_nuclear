@extends('layouts.risda-base')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="mb-0 risda-dg"><strong>PENGURUSAN KURSUS</strong></h1>
            <h5 class="risda-dg">SEMAK JADUAL KURSUS - <span class="risda-g">TAMBAH KURSUS</span></h5>
        </div>
    </div>

    <hr class="risda-g">

    <div class="row">
        <div class="col">
            <h5 class="h3">MAKLUMAT KURSUS</h5>
        </div>
    </div>

    <div class="row justify-content-lg-center mt-3">
        <div class="col-lg-10">
            <form action="/pengurusan_kursus/semak_jadual" method="POST" id="form_add">
                @csrf
                <div class="row mb-2">
                    <div class="col-lg-7">
                        <label class="col-form-label p-0">UNIT LATIHAN</label>
                        <select class="form-select form-control" name="kursus_unit_latihan">
                            <option selected="" hidden>Sila Pilih</option>
                            <option value="Staf">Staf</option>
                            <option value="Pekebun Kecil">Pekebun Kecil</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label class="col-form-label">STATUS</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="status" />
                            <label class="form-check-label">Aktif</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="col-form-label">TAHUN</label>
                            <input class="form-control tahun" type="text" name="tahun" id="tahun" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="col-form-label">TARIKH DAFTAR</label>
                            <input class="form-control" type="date" name="kursus_tarikh_daftar" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="col-form-label">BIDANG KURSUS</label>
                        <select class="form-select form-control" name="kursus_bidang" id="kursus_bidang">
                            <option selected="" hidden>Sila Pilih</option>
                            @foreach ($bidang as $b)
                                <option value="{{ $b->id }}">{{ $b->nama_Bidang_Kursus }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="col-form-label">KATEGORI KURSUS</label>
                        <select class="form-select form-control" name="kod_kategori" id="kursus_kategori">
                            <option selected="" hidden>Sila Pilih</option>
                            @foreach ($kategori as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_Kategori_Kursus }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="col-form-label">TAJUK KURSUS</label>
                        <select class="form-select form-control" name="kod_kursus" id="tajuk">
                            <option selected="" hidden>Sila Pilih</option>
                            @foreach ($kod_kursus as $t)
                                <option value="{{ $t->id }}">{{ $t->tajuk_Kursus }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="col-form-label">SIRI KURSUS</label>
                        <select class="form-select form-control" name="id_siri" id="siri">
                            <option selected="" hidden>Sila Pilih</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="mb-3">
                            <label class="col-form-label">NAMA KURSUS</label>
                            <input class="form-control" type="text" name="kursus_nama" id="nama_kursus" value="" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="mb-3">
                            <label class="col-form-label">KOD NAMA KURSUS</label>
                            <input class="form-control" type="text" name="kursus_kod_nama_kursus" />
                        </div>
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="col-form-label">TARIKH MULA KURSUS</label>
                            <input class="form-control" type="date" name="tarikh_mula" id="tm" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="col-form-label">TARIKH TAMAT KURSUS</label>
                            <input class="form-control" type="date" name="tarikh_tamat" id="tt" />
                        </div>
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="col-form-label">TEMPOH KURSUS</label>
                            <input class="form-control" type="text" name="bilangan_hari" id="tk" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="col-form-label">STATUS PERLAKSANAAN</label>
                            <select class="form-select form-control" name="kursus_status_pelaksanaan">
                                <option selected="" hidden>Sila Pilih</option>
                                @foreach ($status_pelaksanaan as $sp)
                                    <option value="{{ $sp->id }}">{{ $sp->Status_Pelaksanaan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="col-form-label">MASA PENDAFTARAN</label>
                            <input class="form-control datetimepicker" name="kursus_masa_pendaftaran" id="timepicker1"
                                type="text" placeholder="H:i"
                                data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}' />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="col-form-label">TARIKH TUTUP TAWARAN</label>
                            <input class="form-control datetimepicker" type="date" name="kursus_tarikh_tutup" />
                        </div>
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="col-form-label">KOD HRMIS</label>
                            <input class="form-control" type="text" name="kursus_hrmis" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="col-form-label">JULAT UMUR</label>
                            <div class="row m-0 p-0">
                                <div class="col-lg-4 p-0 m-0">
                                    <input class="form-control" type="text" name="kursus_julat_umur1" />
                                </div>
                                <div class="col-lg-4 p-0 m-0 text-center">
                                    <span class="risda-g">HINGGA</span>
                                </div>
                                <div class="col-lg-4 p-0 m-0">
                                    <input class="form-control" type="text" name="kursus_julat_umur2" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="col-form-label">KUMPULAN SASARAN</label>
                        <select class="form-select form-control" name="kursus_kumpulan_sasaran">
                            <option selected="" hidden>Sila Pilih</option>
                            {{-- kumpulan sasaran --}}
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="col-form-label">PENGENDALI LATIHAN</label>
                        <select class="form-select form-control" name="kursus_pengendali_latihan">
                            <option selected="" hidden>Sila Pilih</option>
                            @foreach ($kod_kursus as $pl)
                                <option value="{{ $pl->id }}">{{ $pl->pengendali_latihan }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="col-form-label">CATATAN</label>
                        <input type="text" class="form-control" name="kursus_catatan">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="col-form-label">TEMPAT KURSUS</label>
                        <select class="form-select form-control" name="kursus_tempat">
                            <option selected="" hidden>Sila Pilih</option>
                            @foreach ($kod_kursus as $tk)
                                <option value="{{ $tk->id }}">{{ $tk->tempat_khusus }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="col-form-label">ALAMAT TEMPAT KURSUS</label>
                        <textarea class="form-control" rows="3" name="kursus_alamat_tempat_kursus"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="col-form-label">OBJEKTIF</label>
                        <textarea class="form-control" rows="3" name="kursus_objektif"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="col-form-label">SILIBUS</label>
                        <input type="text" class="form-control" name="kursus_silibus">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="col-form-label">METODOLOGI</label>
                        <input type="text" class="form-control" name="kursus_metodologi">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="col-form-label">NOTA RUJUKAN</label>
                        <input type="file" class="form-control" name="nota_rujukan">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="col-form-label">NO. FT</label>
                        <input type="text" class="form-control" name="kursus_no_ft">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="col-form-label">STAF YANG BERTANGGUNGJAWAB</label>
                        <input type="text" class="form-control" name="kursus_staf_yang_bertanggungjawab">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col text-end">
                        <button type="submit" class="btn btn-primary">Seterusnya</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".tahun").datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
                autoclose: true
            });
        });

        $('#kursus_bidang').change(function() {
            $('#form_add select[name=kod_kategori]').html("");
            var kat_kur = @json($kategori->toArray());
            console.log(kat_kur);

            let option_new = "";
            $('#form_add select[name=kod_kategori]').append(
                `<option value='' hidden>Sila Pilih</option>`);
            kat_kur.forEach(element => {
                if (this.value == element.U_Bidang_Kursus) {
                    $('#form_add select[name=kod_kategori]').append(
                        `<option value=${element.id}>${element.nama_Kategori_Kursus}</option>`);
                }
            });
        });

        $('#kursus_kategori').change(function() {
            $('#form_add select[name=kod_kursus]').html("");
            var kod_kur = @json($kod_kursus->toArray());
            console.log(kod_kur);

            let option_new = "";
            $('#form_add select[name=kod_kursus]').append(
                `<option value='' hidden>Sila Pilih</option>`);
            kod_kur.forEach(element => {
                if (this.value == element.U_Kategori_Kursus) {
                    $('#form_add select[name=kod_kursus]').append(
                        `<option value=${element.id}>${element.tajuk_Kursus}</option>`);
                }
            });
        });

        $('#siri').change(function() {
            var tajuk = $('#tajuk option:selected').text();
            var siri = $('#siri option:selected').text();
            var tahun = $('#tahun').val();
            console.log(tajuk, siri, tahun);
            $('#nama_kursus').val('Kursus ' + tajuk + ' ' + 'Siri ' + siri + ' ' + tahun);
        });

        $('#tm').change(function() {
            var tarikh_mula = $('#tm').val();
            var tarikh_mula = new Date(tarikh_mula);
            var tarikh_tamat = $('#tt').val();
            var tarikh_tamat = new Date(tarikh_tamat);

            var diff = tarikh_tamat - tarikh_mula;
            var tempoh = diff / (1000 * 60 * 60 * 24) + 1;
            console.log(tarikh_tamat, tarikh_mula, tempoh);
            if (isNaN(tempoh)) {
                console.log('check')
                $('#tk').val('');
            }else{
                $('#tk').val(tempoh);
            }

        });

        $('#tt').change(function() {
            var tarikh_mula = $('#tm').val();
            var tarikh_mula = new Date(tarikh_mula);
            var tarikh_tamat = $('#tt').val();
            var tarikh_tamat = new Date(tarikh_tamat);

            var diff = tarikh_tamat - tarikh_mula;
            var tempoh = diff / (1000 * 60 * 60 * 24) + 1;
            console.log(tarikh_tamat, tarikh_mula, tempoh);
            if (isNaN(tempoh)) {
                console.log('check')
                $('#tk').val('');
            }else{
                $('#tk').val(tempoh);
            }

        });
    </script>
@endsection
