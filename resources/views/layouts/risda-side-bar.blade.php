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
            <div class="row ml-5 p-4 risda-side">
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

                    

            </li>
        </div>
    </ul>
</div>
