@extends('layouts.risda-base')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="mb-0"><strong>PERMOHONAN SEBUTHARGA</strong></h1>
            <a  class="risda-dg">PERMOHONAN</a> > <a id="step" class="risda-dg">PERMOHONAN TERPERINCI</a> > <a id="step" class="risda-dg">LAMPIRAN</a> > <a id="step" class="risda-dg">PENGESAHAN</a>
        </div>
    </div>

    <hr class="risda-g">

    <div id="permohonan_step1">
        <form action="#">
            <div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">JENIS PERMOHONAN :</label>
                </div>
                <div class="col-5">
                    <select class="form-select" name="JenisMohon" id="negeri_search" onchange="pilihanJenisMohon()">
                        <option class="text-center">-- SILA PILIH --</option>
                        <option value="dalaman">PERMOHONAN DALAMAN</option>
                        <option value="luaran">PERMOHONAN LUARAN</option>
                    </select>
                </div>

            </div>
            <div class="row mt-3 justify-content-center" id="dalaman_nama" style="display: none;">

                <div class="col-6">
                    <label class="col-form-label">NAMA :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" id="nama" name="Nama">

                </div>

            </div>

            <div class="row mt-3 justify-content-center" id="dalaman_contact" style="display: none;">

                <div class="col-6 text">
                    <label class="col-form-label">CONTACT :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" id="noHP" name="NoHP">
                </div>

            </div>

            <div class="row mt-3 justify-content-center" id="dalaman_hp" style="display: none;">

                <div class="col-6 text">
                    <label class="col-form-label">NO. TELEFON :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" id="noHP" name="NoHP">
                </div>

            </div>
            <div class="row mt-3 justify-content-center" id="dalaman_emel" style="display: none;">

                <div class="col-6 text">
                    <label class="col-form-label">EMEL :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" id="noHP" name="NoHP">
                </div>

            </div>
            <div class="row mt-3 justify-content-center" id="dalaman_catatan" style="display: none;">

                <div class="col-6">
                    <label class="col-form-label">CATATAN :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" style="height:150px;" id="catatan" name="Catatan">
                </div>

            </div>


            <!-- LUARAN PUNYA BARANG -->
            <div class="row mt-3 justify-content-center" id="luaran_nama" style="display: none;">

                <div class="col-6">
                    <label class="col-form-label">Nama Pelanggan :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" style="height:150px;" id="catatan" name="Catatan">
                </div>

            </div>

            <div class="row mt-3 justify-content-center" id="luaran_pelanggan" style="display: none;">

                <div class="col-6">
                    <label class="col-form-label">No Pelanggan :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" style="height:150px;" id="catatan" name="Catatan">
                </div>

            </div>

            <div class="row col-sm-2 mt-3 ">
            <a id="step2" class="risda-dg btn btn-sm btn-primary">SETERUSNYA</a>
            </div>
        </form>
    </div>

    <div id="permohonan_step2" style="display: none;">
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

            PENYINARAN DAN PENGENDALIAN WIRE UNDER BEAM HANDLING SYSTEM (WUBHS)

            </div>
            <div class="row mt-3 justify-content-center">
                <div class="card">
                <div id="second_table" class="card-body p-2">
                </div>
                </div>
            </div>
            <div class="row col-sm-2 mt-3 ">
                <button class="btn btn-sm btn-primary" type="button" onclick="updateDB()">
                    <i class="fas fa-plus"></i> TAMBAH
                </button>
            </div>
        </form>
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
                        <tbody id="tbody2">
                        </tbody>
                    </table>
                <input class="form-control" id="jumlah" value="" readonly>
            </div>
        </div>
            </div>
        <div class="row col-sm-2 mt-3 ">
            <a id="step3" class="risda-dg btn btn-sm btn-primary">SETERUSNYA</a>
        </div>
    </div>

    <div id="permohonan_step3" style="display: none;">
        <form action="#">
            <div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">TAJUK :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" name="tajuk_attachment" id="tajuk_attachment">
                </div>

            </div>

            <div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">CATATAN :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" style="height:150px;" id="catatan" name="catatan_attachment">
                </div>

            </div>
            <div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">Fail :</label>
                </div>
                <div class="col-5">
                <input type="file" id="myfile" name="myfile">
                </div>

            </div>
        </form>
        <div class="row col-sm-2 mt-3 ">
            <a id="step4" class="risda-dg btn btn-sm btn-primary">SETERUSNYA</a>
            </div>
    </div>

    <div id="permohonan_step4" style="display: none;">
        <div id="penampalan"></div>
        <textarea name="catatanAttachment" class="form-control" id="" disable="true" rows="3"></textarea>
        <!-- <input name="catatanAttachment" value=""> -->
        <a class="btn btn-sm btn-primary" onclick="sweetAlit()">Hantar Permohonan</a>


    </div>

    <script type="text/javascript">

    var current_sebut_harga = 0;

    // options second
    var aca_option = 
        `<option value="ACA" >ACA - TS-1000-10</option>
        <option value="ALURTRON">ACA - TS-1000-4</option>
        <option value="BIODOSE">ACA - XLPE</option>
        <option value="BIOTEST">ACA - TS-1000-2</option>`;
    var alurtron_option = 
        `<option value="ACA" >ALURTRON - TS-1000-10</option>
        <option value="ALURTRON">ALURTRON - TS-1000-4</option>
        <option value="BIODOSE">ALURTRON - XLPE</option>
        <option value="BIOTEST">ALURTRON - TS-1000-2</option>`;
    var biodose_option =  
        `<option value="ACA" >BIODOSE - TS-1000-10</option>
        <option value="ALURTRON">BIODOSE - TS-1000-4</option>
        <option value="BIODOSE">BIODOSE - XLPE</option>
        <option value="BIOTEST">BIODOSE - TS-1000-2</option>`;
    var biotest_option =  
        `<option value="ACA" >BIOTEST - TS-1000-10</option>
        <option value="ALURTRON">BIOTEST - TS-1000-4</option>
        <option value="BIODOSE">BIOTEST - XLPE</option>
        <option value="BIOTEST">BIOTEST - TS-1000-2</option>`;

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
                            <td class="col-xs-3" ><input hidden="true" name="NamaProduk" value="TS-1000-10">TS-1000-10</td>
                            <td class="col-xs-6"><input hidden="true" name="AmaunProduk" value="0.12">0.12/meter </td>
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
                            <td class="col-xs-3" ><input hidden="true" name="NamaProduk" value="TS-1000-4">TS-1000-4</td>
                            <td class="col-xs-6"><input hidden="true" name="AmaunProduk" value="0.14">0.14/meter </td>
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
                            <td class="col-xs-3"><input hidden="true" name="NamaProduk" value="XLPE">XLPE</td>
                            <td class="col-xs-6"><input hidden="true" name="AmaunProduk" value="0.16">0.16/meter </td>
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
                            <td class="col-xs-3" ><input name="NamaProduk" style="border:0;" disabled="true" hidden="true" value="TS-1000-10">TS-1000-2</td>
                            <td class="col-xs-6"><input name="AmaunProduk" disabled="true" hidden="true" value="0.12">0.12/meter</td>
                            <td class="col-xs-6">Outer Diameter: 6.4mm</td>
                            <td class="col-xs-6"><input name="KuantitiProduk" class="form-control"></td>
                        </tr>
                        </tbody>
                    </table>`

    
    function updateDBFirst() {
        let sebutHargaData = {};
        sebutHargaData.JenisMohon = $("select[name=JenisMohon]").val();
        sebutHargaData.Nama = $("input[name=Nama]").val();
        sebutHargaData.NoHP = $("input[name=NoHP]").val();
        sebutHargaData.Catatan = $("input[name=Catatan]").val();
        sebutHargaData.status = 'baru';

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: '/sebutharga',
            data: sebutHargaData,
            success: function(res){
                console.log("res1",res);
                current_sebut_harga = res;
            }
        });


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

       
        sebutHargaDataItem.SebutHargaId=current_sebut_harga;
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
                    url: '/sebuthargaitem/'+res.SebutHargaId,
                    success: function(res){
                        console.log("RES 3",res)
                        let table_data = "";
                        let jumlah = 0;
                        for(let i=0; i<res.length; i++) {
                            table_data = table_data + `<tr>
                                <td class="col-xs-3" >${i+1}</td>
                                <td class="col-xs-3" >${res[i].NamaKhidmat}</td>
                                <td class="col-xs-3" >${res[i].KuantitiProduk}</td>
                                <td class="col-xs-3" >${res[i].KuantitiProduk * res[i].AmaunProduk}</td>
                            </tr>`;

                            jumlah = jumlah + res[i].KuantitiProduk * res[i].AmaunProduk;
                        }

                        $("#jumlah").val(jumlah);
                        $("#tbody2").html(table_data);
                        
                    }
                })
            }
        })
    
       

        //TODO
        //get form data
        //$ajax call -> simpan data sebutharga
        //onsuccess (get sebutharga ID)
        // get form sebut harga item
        //$ajax call -> simpan data sebutharga item
        //load table 
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


    function updateSebutHarga() {
        let updateSebutHargaData = {};
        updateSebutHargaData.TajukAttachment = $("input[name=tajuk_attachment]").val();
        updateSebutHargaData.CatatanAttachment = $("input[name=catatan_attachment]").val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'PUT',
            url: '/sebutharga/' + current_sebut_harga,
            data: updateSebutHargaData,
            success: function(res){
                console.log("update sebut harga",res);

                //ambik table
                $("#penampalan").html($("#target_table"));
                $("input[name=catatanAttachment]").val(res.CatatanAttachment);
            }
        });


    }
   

    $("#step1").click(function() {
        $("#permohonan_step1").show();
        $("#permohonan_step3").hide();
        $("#permohonan_step4").hide();
        $("#permohonan_step2").hide();
    })

    $("#step2").click(function() {
        $("#permohonan_step1").hide();
        $("#permohonan_step3").hide();
        $("#permohonan_step4").hide();
        $("#permohonan_step2").show();


        updateDBFirst();
    })

    $("#step3").click(function() {

        $("#permohonan_step1").hide();
        $("#permohonan_step3").show();
        $("#permohonan_step4").hide();
        $("#permohonan_step2").hide();

    })

    $("#step4").click(function() {
        $("#permohonan_step1").hide();
        $("#permohonan_step3").hide();
        $("#permohonan_step4").show();
        $("#permohonan_step2").hide();
        updateSebutHarga();

    })

    function sweetAlit() {
        alert("Permohonan Anda Berjaya Dihantar");
        window.location.reload();
    }


    function pilihanJenisMohon() {
        let selection = $("#negeri_search").val();
        if (selection == "dalaman") {
            $("#dalaman_nama").show();
            $("#dalaman_hp").show();
            $("#dalaman_catatan").show();
            $("#luaran_nama").hide();
            $("#luaran_pelanggan").hide();
            $("#dalaman_contact").hide();
            $("#dalaman_emel").hide();


        }

        else if (selection == "luaran") {
            $("#dalaman_contact").show();
            $("#dalaman_emel").show();
            $("#dalaman_nama").show();
            $("#dalaman_hp").show();
            $("#dalaman_catatan").show();
        }

        else {
            console.log("cincai punya kerja");
        }
    }
    </script>

    
@endsection
