<style>
    .risda-side {
        /* margin-top: 225px; */
        /* padding: 20px; */
        /* width: 350px; */
        /* position: fixed; */
        /* overflow-y: auto;
        top: 0;
        bottom: 0; */
        background-color: #2CABE1;
        color: white;
    }

    /* .nav-link-text {
        color: white;
    }

    

    .nav-link-text.active {
        color: white;
        background-color: #009640;
    } */

</style>

<div class="ml-5 bg-white " style="height:100%" >
    <ul class="navbar-nav flex-column " id="navbarVerticalNav">
        <div class="row">
            <div class="col ml-5">        
            <div class="row ml-5 p-4 risda-side text-center">
                <h5 class="text-white">Selamat Datang!</h5>
                <div class="col ">
                    @if (Auth::user()->gambar_profil == null)
                        <img src="/img/dp.jpg" alt="profile_picture"
                            style="border-radius: 25px; border: 2px solid #73AD21; width:54px; height:54px; object-fit: cover;">
                    @else
                        <img src="/{{ Auth::user()->gambar_profil }}" alt="profile_picture"
                            style="border-radius: 25px; border: 2px solid #73AD21; width:54px; height:54px; object-fit: cover;">
                    @endif
                    <h3 class="h5 text-white"><strong>{{ Auth::user()->name }}</strong></h3>
                    <a href="/logout" class="btn btn-sm btn-primary risda-dg">LOG KELUAR</a>
                </div>
            </div>
        </div>
        <div class="text-black">
            <li class="nav-item text-black p-4">
                <!-- label-->
                <div class="row navbar-vertical-label-wrapper mb-2">
                    <div class="col-auto navbar-vertical-label text-black">
                        Modul Perkhidmatan Jualan
                    </div>
                    <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider text-black" />
                    </div>
                </div>
                <a class="nav-link py-0" href="/sebutharga" role="button">
                    <div class="d-flex align-items-center nav-link-side text-black px-0">
                    PERMOHONAN SEBUTHARGA
                    </div>
                </a>

                <a class="nav-link py-0 dropdown-indicator" href="#pengurusan_kursus" role="button"
                    data-bs-toggle="collapse"
                    aria-expanded="{{ Request::is('pengurusan_kursus/*') ? 'true' : 'false' }}"
                    aria-controls="pengurusan_kursus">
                    <div class="d-flex align-items-center nav-link-side px-0 text-black">
                        SEBUTHARGA
                    </div>
                </a>
                <ul class="nav-item collapse {{ Request::is('pengurusan_kursus/*') ? 'show' : 'false' }} my-1"
                    id="pengurusan_kursus">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('pengurusan_kursus/*') ? 'active' : '' }} py-0"
                            href="/sebuthargaRFQ">
                            <div class="d-flex align-items-center nav-link-side text-black">
                                SEBUTHARGA RFQ
                            </div>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link {{ Request::is('pengurusan_kursus/*') ? 'active' : '' }} py-0"
                            href="/pengurusan_kursus/semak_jadual">
                            <div class="d-flex align-items-center nav-link-side text-black">
                                SEBUTHARGA
                            </div>
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('pengurusan_kursus/*') ? 'active' : '' }} py-0"
                            href="/sebuthargaList">
                            <div class="d-flex align-items-center nav-link-side text-black">
                                SENARAI SEBUTHARGA 
                            </div>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link {{ Request::is('pengurusan_kursus/*') ? 'active' : '' }} py-0"
                            href="/pengurusan_kursus/semak_jadual">
                            <div class="d-flex align-items-center nav-link-side text-black">
                                KELULUSAN
                            </div>
                        </a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link {{ Request::is('pengurusan_kursus/*') ? 'active' : '' }} py-0"
                            href="/pengurusan_kursus/semak_jadual">
                            <div class="d-flex align-items-center nav-link-side text-black">
                                SEBUTHARGA LAMA
                            </div>
                        </a>
                    </li> -->
                </ul>


                    <a class="nav-link py-0 dropdown-indicator" href="#utiliti" role="button" data-bs-toggle="collapse"
                        aria-expanded="{{ Request::is('utiliti/*') ? 'true' : 'false' }}" aria-controls="utiliti">
                        <div class="d-flex align-items-center nav-link-side px-0 text-black">
                           PESANAN 
                        </div>
                    </a>
                    <ul class="nav-item collapse {{ Request::is('utiliti/*') ? 'show' : 'false' }} my-1" id="utiliti">
                        <li class="nav-item">
                            <a class="nav-link py-0 " href="/pesanan">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span class="px-0 text-black">JANA PESANAN</span>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <a class="nav-link py-0 dropdown-indicator" href="#utiliti" role="button" data-bs-toggle="collapse"
                        aria-expanded="{{ Request::is('utiliti/*') ? 'true' : 'false' }}" aria-controls="utiliti">
                        <div class="d-flex align-items-center nav-link-side px-0 text-black">
                           PESANAN 
                        </div>
                    </a>
                    <ul class="nav-item collapse {{ Request::is('utiliti/*') ? 'show' : 'false' }} my-1" id="utiliti">
                        <li class="nav-item">
                            <a class="nav-link py-0 " href="/pesanan">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span class="px-0 text-black">JANA PESANAN</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0 " href="/kelulusan_pesanan">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span class="px-0 text-black">KELULUSAN PESANAN</span>
                                </div>
                            </a>
                        </li>


                       <!-- <li class="nav-item">
                            <a class="nav-link py-0" href="#kumpulan" role="button" data-bs-toggle="collapse"
                                aria-expanded="{{ Request::is('utiliti/kumpulan/*') ? 'true' : 'false' }}"
                                aria-controls="kumpulan">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span class="px-0">Kod Kumpulan</span>
                                </div>
                            </a>

                            <ul class="nav-item collapse {{ Request::is('utiliti/kumpulan/*') ? 'show' : 'false' }} my-1"
                                id="kumpulan">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('utiliti/kumpulan/kategori_agensi') ? 'active' : '' }} py-0"
                                        href="/utiliti/kumpulan/kategori_agensi">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Kategori Agensi</span>
                                        </div>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('utiliti/kumpulan/agensi') ? 'active' : '' }} py-0"
                                        href="/utiliti/kumpulan/agensi">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Senarai Agensi</span>
                                        </div>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('utiliti/kumpulan/pusat_tanggungjawab') ? 'active' : '' }} py-0"
                                        href="/utiliti/kumpulan/pusat_tanggungjawab">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Pusat Tanggungjawab</span>
                                        </div>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0" href="#julat" role="button" data-bs-toggle="collapse"
                                aria-expanded="{{ Request::is('utiliti/julat/*') ? 'true' : 'false' }}"
                                aria-controls="julat">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span class="px-0">Kod Julat</span>
                                </div>
                            </a>
                            <ul class="nav-item collapse {{ Request::is('utiliti/julat/*') ? 'show' : 'false' }} my-1"
                                id="julat">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('utiliti/julat/julat_tahunan') ? 'active' : '' }} py-0"
                                        href="/utiliti/julat/julat_tahunan">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Julat Tahunan</span>
                                        </div>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0" href="#status" role="button" data-bs-toggle="collapse"
                                aria-expanded="{{ Request::is('utiliti/status/*') ? 'true' : 'false' }}"
                                aria-controls="status">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span class="px-0">Kod Status</span>
                                </div>
                            </a>
                            <ul class="nav-item collapse {{ Request::is('utiliti/status/*') ? 'show' : 'false' }} my-1"
                                id="status">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('utiliti/status/status_pelaksanaan') ? 'active' : '' }} py-0"
                                        href="/utiliti/status/status_pelaksanaan">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Status Pelaksanaan</span>
                                        </div>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0" href="#generik" role="button" data-bs-toggle="collapse"
                                aria-expanded="{{ Request::is('utiliti/generik/*') ? 'true' : 'false' }}"
                                aria-controls="generik">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span class="px-0">Kod Generik</span>
                                </div>
                            </a>

                            <ul class="nav-item collapse {{ Request::is('utiliti/generik/*') ? 'show' : 'false' }} my-1"
                                id="generik">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('utiliti/generik/agama') ? 'active' : '' }} py-0"
                                        href="/utiliti/generik/agama">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Agama</span>
                                        </div>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('utiliti/generik/bangsa') ? 'active' : '' }} py-0"
                                        href="/utiliti/generik/bangsa">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Bangsa</span>
                                        </div>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('utiliti/generik/sumber') ? 'active' : '' }} py-0"
                                        href="/utiliti/generik/sumber">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Sumber</span>
                                        </div>
                                    </a>

                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0" href="#kursus" role="button" data-bs-toggle="collapse"
                                aria-expanded="{{ Request::is('utiliti/kursus/*') ? 'true' : 'false' }}"
                                aria-controls="kursus">
                                <div class="d-flex align-items-center nav-link-side">
                                    <span class="px-0">Kod Kursus</span>
                                </div>
                            </a>

                            <ul class="nav-item collapse {{ Request::is('utiliti/kursus/*') ? 'show' : 'false' }} my-1"
                                id="kursus">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('utiliti/kursus/bidang_kursus') ? 'active' : '' }} py-0"
                                        href="/utiliti/kursus/bidang_kursus">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Bidang Kursus</span>
                                        </div>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('utiliti/kursus/kategori_kursus') ? 'active' : '' }} py-0"
                                        href="/utiliti/kursus/kategori_kursus">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Kategori Kursus</span>
                                        </div>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('utiliti/kursus/kod_kursus') ? 'active' : '' }} py-0"
                                        href="/utiliti/kursus/kod_kursus">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Kod Kursus</span>
                                        </div>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('utiliti/kursus/gred_pegawai') ? 'active' : '' }} py-0"
                                        href="/utiliti/kursus/gred_pegawai">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Gred Pegawai</span>
                                        </div>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('utiliti/kursus/elaun_cuti_kursus') ? 'active' : '' }} py-0"
                                        href="/utiliti/kursus/elaun_cuti_kursus">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Elaun/Cuti Kursus</span>
                                        </div>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('utiliti/kursus/kod_objek') ? 'active' : '' }} py-0"
                                        href="/utiliti/kursus/kod_objek">
                                        <div class="d-flex align-items-center nav-link-side">
                                            <span class="px-0">Kod Objek</span>
                                        </div>
                                    </a>

                                </li>
                            </ul>
                        </li> -->
                    </ul>


            </li>
        </div>
    </ul>
</div>
