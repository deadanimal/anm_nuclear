@extends('layouts.login_base')
@section('content')
    <div class="container-fluid">
        <div class="row min-vh-100 flex-center g-0">
            <div class="col-lg-6 col-xxl-5 py-3 position-relative">
                <div class="tab-content" id="pill-myTabContent">
                    <div class="tab-pane fade show active" id="pill-tab-home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card overflow-hidden z-index-1">
                            <div class="card-body p-0">
                                
                                <div class="row g-0 h-100 d-flex flex-center">
                                    <div class="col-lg-8 d-flex flex-center">
                                        <div class="p-5 flex-grow-1">
                                            <div class="row flex-between-center text-center">
                                                <div class="row">
                                                    <div class="mb-3 text-center">
                                                        <img src="/img/Logo Agensi Nuklear Malaysia.png" alt="logo" width="60%">
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <h3 class="text-center">Log Masuk</h3>
                                                </div>
                                            </div>

                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <input type="hidden" name="pengguna" value="pk">
                                                <div class="mb-3" id="nric">
                                                    <label class="form-label"  >Email</label>
                                                    <input class="form-control" type="text" name="no_KP"/>
                                                </div>
                                                <div class="mb-3" id="emel" style="display:none">
                                                    <label class="form-label"  >E-mel</label>
                                                    <input class="form-control" type="email" name="email"
                                                        :value="old('email')" autofocus />
                                                </div>
                                                <div class="mb-3">
                                                    <div class="d-flex justify-content-between">
                                                        <label class="form-label" >Kata
                                                            Laluan</label>
                                                    </div>
                                                    <input class="form-control" type="password"
                                                        name="password" required autocomplete="current-password" />
                                                </div>
                                                <div class="form-check mb-0">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <input class="form-check-input" type="checkbox"
                                                                checked="checked" />
                                                            <label class="form-check-label" >Ingati
                                                                Saya</label>
                                                        </div>
                                                        <div class="col-lg-6 text-end">
                                                            <a class="fs--1" href="/lupa_katalaluan">Terlupa Kata Laluan?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <button class="btn btn-primary d-block w-100 mt-3" type="submit"
                                                        name="submit">Log Masuk</button>
                                                </div>
                                            </form>
                                            <!--<div class="row mt-3">
                                                <div class="col text-center">
                                                    <a href="/semak_nric" class="risda-g">Tiada Akaun? Daftar Sekarang</a>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function tukar() {
            let b = $('#pilihan option:selected').text();

            if (b == 'No. Kad Pengenalan') {
                $('#nric').show().find(':input').attr('required', true);
                $('#emel').hide().find(':input').attr('required', false);;
            } else if (b == 'Email') {
                $('#nric').hide().find(':input').attr('required', false);;
                $('#emel').show().find(':input').attr('required', true);;
            }
        }
    </script>
@stop
