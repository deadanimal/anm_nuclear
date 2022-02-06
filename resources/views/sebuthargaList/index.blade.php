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
    <div id="1step">
        <div class="row justify-content-lg-center mt-3" >
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

        <div class="row p-6" >
            <div class="">
                <a  class="btn btn-primary" type="button" onclick="getSebutHarga()">
                    <i class="fas fa-search"></i> Carian
                </a>
            </div>
        </div>

        <div class="card" id="target_table2">
            <div id="item_added_table" class="card-body p-2" style="display: none;">
                <table id="infoTable2" class="table table-fixed table-condensed">
                    <thead>
                    <tr>
                        <th class="col-xs-1">BIL.</th>
                        <th class="col-xs-3">Nama Pemohon</th>
                        <th class="col-xs-6">No. Permohonan</th>
                        <th class="col-xs-6">Tarikh Pohon</th>
                    </tr>
                    </thead>
                    <tbody id="tbody2">
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="2step" style="display: none;" >
        <div class=" mt-3" >
            <div class="row card">
                <div class="card-body mt-2">
                    <div class="col-2">
                        <label class="col-form-label"> NO. RFQ:</label>
                    </div>
                    <div class="col-4">
                        <input class="form-control" name="no_rfq" id="no_rfq" disabled="true">
                    </div>
            
                    <div class="col-2 ">
                        <label class="col-form-label">NAMA PELANGGAN:</label>
                    </div>
                    <div class="col-4">
                        <input class="form-control" name="nama_pelanggan2" id="nama_pelanggan2"  disabled="true">
                    </div>
                    <div class="col-2 ">
                        <label class="col-form-label">ALAMAT PELANGGAN:</label>
                    </div>
                    <div class="col-4">
                        <input class="form-control" name="alamat_pelanggan" id="alamat_pelanggan" style="height:100px"  disabled="true">
                    </div>
                    <div class="col-2 ">
                        <label class="col-form-label">EMEL :</label>
                    </div>
                    <div class="col-4">
                        <input class="form-control" name="emel" id="emel"  disabled="true">
                    </div>
                </div>
            </div>  
        </div>

        <div class="mt-3">
            LAMPIRAN PERMOHONAN SEBUTHARGA (RFQ) : NONE
        </div>

        <div class="row justify-content-lg-center mt-5" >
            <div class="col-lg-10 ">

                <div class="row">
                    <div class="col-lg-4 p-0">
                        <label class="col-form-label">TARIKH :</label>
                    </div>
                    <div class="col-lg-6">
                        <input class="form-control" name="tarikh" id="tarikh">
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-lg-4 p-0">
                        <label class="col-form-label">TARIKH SAH :</label>
                    </div>
                    <div class="col-lg-6">
                        <input class="form-control" name="tarikh_sah" id="tarikh_sah">
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-lg-4 p-0">
                        <label class="col-form-label">CATATAN : </label>
                    </div>
                    <div class="col-lg-6">
                        <input class="form-control" name="catatan" id="catatan">
                    </div>
                </div>

            </div>
        </div>

        <div class="row mt-4" >
            <div class="">
                <a  class="btn btn-primary" type="button" onclick="step2()">
                    <i class="fas fa-search"></i> SETERUSNYA
                </a>
            </div>
        </div>
    </div>

    <div id="anjaystep" style="display:none;">
        <form action="#">
            <div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">PUSAT KHIDMAT :</label>
                </div>
                <div class="col-5">
                    <select class="form-select" name="PusatKhidmat" id="first_option" onchange="updateSecondOption()">
                        <option class="text-center">-- SILA PILIH --</option>
                        <option value="ACA" >ACA - MAKMA APLIKASI KIMIA ANALISIS</option>
                        <option value="ALURTRON">ALURTRON - LOJI PENYIARAN ALURTRON</option>
                        <option value="BIODOSE">BIODOSE - MAKMAL BIODOSE</option>
                        <option value="BIOTEST">BIOTEST - MAKMAL BIOTEST</option>
                    </select>
                </div>

            </div>
            <div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">JENIS PERKHIDMATAN :</label>
                </div>
                <div class="col-5">
                    <select class="form-control" id="second_option" name="JenisKhidmat" onchange="updateOptionTable()"></select>
                </div>

            </div>

            <div class="row mt-3 justify-content-center">
                <div class="card">
                <div id="second_table" class="card-body p-2">
                </div>
                </div>
            </div>
            <div class="row col-sm-4 mt-3 ">
                <button class="btn btn-sm btn-primary" type="button" onclick="updateDB()" style="width:130px;"> 
                    <i class="fas fa-plus"></i> TAMBAH
                </button>
                <button class="btn btn-sm btn-primary ml-2" type="button" onclick="step2()" style="width:130px;">
                    <i class="fas fa-backward"></i> KEMBALI
                </button>
            </div>
        </form>
    </div>

    <div id="stepakhir" style="display: none;">
        <div id="penampalan"></div>
        
        <a class="btn btn-sm btn-primary" onclick="sweetAlit()">Hantar Permohonan</a>
    </div>

    <div id="3step" style="display: none;">
        <div class="row justify-content-lg-center mt-3" >
            <div class="row mt-4" >
                <div class="">
                    <a  class="btn btn-primary" type="button" onclick="stepplus()">
                        <i class="fas fa-plus"></i> TAMBAH
                    </a>
                </div>
                <div class="row mt-3 justify-content-center">
                    <div class="card" id="target_table">
                        <div id="item_added_table" class="card-body p-2">
                            <table id="infoTable2" class="table table-fixed table-condensed">
                                <thead>
                                <tr>
                                    <th class="col-xs-1">BIL.</th>
                                    <th class="col-xs-3">KHIDMAT/PRODUK</th>
                                    <th class="col-xs-6">AMAUN</th>
                                    <th class="col-xs-6">JUMLAH</th>

                                </tr>
                                </thead>
                                <tbody id="tbody3">
                                </tbody>
                            </table>
                        
                        </div>
                    </div>
                </div>
                <div class="row mt-4" >
                <div class="">
                    <a  class="btn btn-primary" type="button" onclick="steplast()">
                        <i class="fas fa-search"></i> SETERUSNYA
                    </a>
                </div>
            </div>  
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

    <script type="text/javascript">

var aca_option = 
        `<option value="ACA" >ACA - MAKMA APLIKASI KIMIA ANALISIS</option>
        <option value="ALURTRON">ACA - LOJI PENYIARAN ALURTRON</option>
        <option value="BIODOSE">ACA - MAKMAL BIODOSE</option>
        <option value="BIOTEST">ACA - MAKMAL BIOTEST</option>`;
    var alurtron_option = 
        `<option value="ACA" >ALURTRON - MAKMA APLIKASI KIMIA ANALISIS</option>
        <option value="ALURTRON">ALURTRON - LOJI PENYIARAN ALURTRON</option>
        <option value="BIODOSE">ALURTRON - MAKMAL BIODOSE</option>
        <option value="BIOTEST">ALURTRON - MAKMAL BIOTEST</option>`;
    var biodose_option =  
        `<option value="ACA" >BIODOSE - MAKMA APLIKASI KIMIA ANALISIS</option>
        <option value="ALURTRON">BIODOSE - LOJI PENYIARAN ALURTRON</option>
        <option value="BIODOSE">BIODOSE - MAKMAL BIODOSE</option>
        <option value="BIOTEST">BIODOSE - MAKMAL BIOTEST</option>`;
    var biotest_option =  
        `<option value="ACA" >BIOTEST - MAKMA APLIKASI KIMIA ANALISIS</option>
        <option value="ALURTRON">BIOTEST - LOJI PENYIARAN ALURTRON</option>
        <option value="BIODOSE">BIOTEST - MAKMAL BIODOSE</option>
        <option value="BIOTEST">BIOTEST - MAKMAL BIOTEST</option>`;

    // option table

    var aca_table = `<table id="infoTable" class="table table-fixed table-condensed">
                        <thead>
                        <tr>
                            <th class="col-xs-1">ACABIL.</th>
                            <th class="col-xs-3">KHIDMAT/PRODUK</th>
                            <th class="col-xs-6">HARGA</th>
                            <th class="col-xs-6">CATATAN</th>
                            <th class="col-xs-6">KUANTITI</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr class="clickableRow">
                            <td class="col-xs-1">1.</td>
                            <td class="col-xs-3" name="NamaProduk">TS-1000-10</td>
                            <td class="col-xs-6">0.12/meter </td>
                            <td class="col-xs-6">Outer Diameter: 6.4mm</td>
                            <td class="col-xs-6"><input name="KuantitiProduk" class="form-control"></td>

                        </tr>
                        </tbody>
                    </table>`
                    var alurtron_table = `<table id="infoTable" class="table table-fixed table-condensed">
                        <thead>
                        <tr>
                            <th class="col-xs-1">ALUBIL.</th>
                            <th class="col-xs-3">KHIDMAT/PRODUK</th>
                            <th class="col-xs-6">HARGA</th>
                            <th class="col-xs-6">CATATAN</th>
                            <th class="col-xs-6">KUANTITI</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="clickableRow">
                            <td class="col-xs-1">2.</td>
                            <td class="col-xs-3" name="NamaProduk">TS-1000-4</td>
                            <td class="col-xs-6">0.14/meter </td>
                            <td class="col-xs-6">Outer Diameter: 9.5mm</td>
                            <td class="col-xs-6"><input name="KuantitiProduk" class="form-control"></td>
                        </tr>
                        </tbody>
                    </table>`
                    var biodose_table = `<table id="infoTable" class="table table-fixed table-condensed">
                        <thead>
                        <tr>
                            <th class="col-xs-1">DOSEBIL.</th>
                            <th class="col-xs-3">KHIDMAT/PRODUK</th>
                            <th class="col-xs-6">HARGA</th>
                            <th class="col-xs-6">CATATAN</th>
                            <th class="col-xs-6">KUANTITI</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="clickableRow">
                            <td class="col-xs-1">3.</td>
                            <td class="col-xs-3" name="NamaProduk">XLPE</td>
                            <td class="col-xs-6">0.16/meter </td>
                            <td class="col-xs-6">Hot Water Pipe: 10mm</td>
                            <td class="col-xs-6"><input name="KuantitiProduk" class="form-control"></td>
                        </tr>
                        </tbody>
                    </table>`
                    var biotest_table = `<table id="infoTable" class="table table-fixed table-condensed">
                        <thead>
                        <tr>
                            <th class="col-xs-1">TESTBIL.</th>
                            <th class="col-xs-3">KHIDMAT/PRODUK</th>
                            <th class="col-xs-6">HARGA</th>
                            <th class="col-xs-6">CATATAN</th>
                            <th class="col-xs-6">KUANTITI</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="clickableRow">
                            <td class="col-xs-1">1.</td>
                            <td class="col-xs-3" ><input name="NamaProduk" disabled="true" value="TS-1000-10"></td>
                            <td class="col-xs-6"><input name="AmaunProduk" disabled="true" value="0.12">/meter</td>
                            <td class="col-xs-6">Outer Diameter: 6.4mm</td>
                            <td class="col-xs-6"><input name="KuantitiProduk" class="form-control"></td>
                        </tr>
                        </tbody>
                    </table>`


        function getSebutHarga(){
            $data = document.getElementById("no_permohonan").value;
            console.log($data);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'GET',
                url: '/sebutharga/'+ $data,
                success: function(res){
                    console.log("get all RFQ",res)
                    
                    let table_data = "";
                    // let jumlah = 0;
                    for(let i=0; i<res.length; i++) {
                        table_data = table_data + `<tr class="clickableRow" onclick="step1()">
                            <td class="col-xs-3" >${i+1}</td>
                            <td class="col-xs-3" >${res[i].Nama}</td>
                            <td class="col-xs-3" > NM/RQ/${res[i].id}</td>
                            <td class="col-xs-3" >${res[i].created_at.slice(0,10)}</td>
                        </tr>`;

                    //     jumlah = jumlah + res[i].KuantitiProduk * res[i].AmaunProduk;
                    // }

                    // $("#jumlah").val(jumlah);
                    $("#item_added_table").show();
                    $("#tbody2").html(table_data);
                    }
                }
            })

        }
        
        function step1() {
            $("#2step").show();
            $("#1step").hide();
        }

        function step2() {
            $("#3step").show();
            $("#anjaystep").hide();
            $("#2step").hide(); 
            $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'GET',
                    url: '/sebuthargaitem/'+$data,
                    success: function(res){
                        console.log("RES 3",res)
                        let table_data2 = "";
                        let jumlah = 0;
                        for(let i=0; i<res.length; i++) {
                            table_data2 = table_data2 + `<tr>
                                <td class="col-xs-3" >${i+1}</td>
                                <td class="col-xs-3" >${res[i].NamaKhidmat}</td>
                                <td class="col-xs-3" >${res[i].KuantitiProduk}</td>
                                <td class="col-xs-3" >${res[i].KuantitiProduk * res[i].AmaunProduk}</td>
                            </tr>`;

                            jumlah = jumlah + res[i].KuantitiProduk * res[i].AmaunProduk;
                        }

                        $("#jumlah").val(jumlah);
                        $("#tbody3").html(table_data2);
                        
                    }
            })
        }

        function stepplus() {
            $("#anjaystep").show();
            $("#3step").hide();
        }

        function steplast() {
            $("#penampalan").html($("#target_table"));
            $("#stepakhir").show();
            $("#anjaystep").hide();
        }

        function updateSecondOption() {
            let selected = $("#first_option").val();
            if (selected == "ACA") {
                $("#second_option").html(aca_option);
            }

            if (selected == "ALURTRON") {
                $("#second_option").html(alurtron_option);
            }

            if (selected == "BIODOSE") {
                $("#second_option").html(biodose_option);
            }

            if (selected == "BIOTEST") {
                $("#second_option").html(biotest_option);
            }
            

        }

        function updateOptionTable() {
            let selected = $("#second_option").val();
            if (selected == "ACA") {
                $("#second_table").html(aca_table);
            }

            if (selected == "ALURTRON") {
                $("#second_table").html(alurtron_table);
            }

            if (selected == "BIODOSE") {
                $("#second_table").html(biodose_table);
            }

            if (selected == "BIOTEST") {
                $("#second_table").html(biotest_table);
            }
            

        }

        function updateDB() {

            //SebutHarga

            //SebutHargaItem
            let sebutHargaDataItem = {};
            sebutHargaDataItem.PusatKhidmat = $("select[name=PusatKhidmat]").val();
            sebutHargaDataItem.JenisKhidmat = $("select[name=JenisKhidmat]").val();
            sebutHargaDataItem.NamaProduk = $("input[name=NamaProduk]").val();
            sebutHargaDataItem.KuantitiProduk = $("input[name=KuantitiProduk]").val();
            sebutHargaDataItem.AmaunProduk = $("input[name=AmaunProduk]").val();

            sebutHargaDataItem.SebutHargaId=$data;
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '/sebuthargaitem',
                data: sebutHargaDataItem,
                success: function(res){
                    console.log("RES 2",res)
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'GET',
                        url: '/sebuthargaitem/'+$data,
                        success: function(res){
                            console.log("RES 3",res)
                            let table_data2 = "";
                            let jumlah = 0;
                            for(let i=0; i<res.length; i++) {
                                table_data2 = table_data2 + `<tr>
                                    <td class="col-xs-3" >${i+1}</td>
                                    <td class="col-xs-3" >${res[i].NamaKhidmat}</td>
                                    <td class="col-xs-3" >${res[i].KuantitiProduk}</td>
                                    <td class="col-xs-3" >${res[i].KuantitiProduk * res[i].AmaunProduk}</td>
                                </tr>`;
                            }

                            $("#jumlah").val(jumlah);
                            $("#tbody3").html(table_data2);
                            
                        }
                    })

                    step2();
                    
                }
            })
        }

    </script>
@endsection
