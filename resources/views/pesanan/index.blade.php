@extends('layouts.risda-base')
@section('content')
    <div class="row">
        <div class="col">
            <a class="risda-dg">PESANAN</a> <a class="risda-dg" style="display: none;" id="step2_header"> > MAKLUMAT PESANAN</a>  <a class="risda-dg" style="display: none;" id="step3_header"> > PESANAN TERPERINCI</a>

            <h1 class="mb-0"><strong>JANA PESANAN</strong></h1>
        </div>
    </div>

    <hr class="risda-g">

    <div id="pesanan_step1">
        <div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">NAMA PELANGGAN :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" name="nama_pelanggan">
                </div>

            </div>
          <div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">NO PERMOHONAN SEBUTHARGA :</label>
                </div>
                <div class="col-5">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">NM/QUO/</span>
  </div>
  <input type="text" name="no_sebutharga" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>
                </div>

            </div>
            <div class=" mt-3 ">
            <a id="step2" style="margin-left: 88%;" onclick="clickCarian()" class="risda-dg btn btn-sm btn-primary">CARIAN</a>
            </div>

            <div id="sebutHargaTableDiv" class="row mt-3 justify-content-center" style="display: none;">
                <div class="card">
                <div id="sebutharga_table" class="card-body p-2">

                <table id="infoTable2" class="table table-fixed table-condensed">
                        <thead>
                        <tr>
                            <th class="col-xs-1">BIL.</th>
                            <th class="col-xs-3">NAMA PELANGGAN</th>
                            <th class="col-xs-6">NO PERMOHONAN SEBUTHARGA</th>

                        </tr>
                        </thead>
                        <tbody id="tbody2">
                        </tbody>

                </table>
                </div>
                </div>
            </div>



    </div>
    <div id="pesanan_step2" style="display: none;">

            <a class="risda-dg text-black">*Sila Isi Semua Maklumat di Bawah</a> 
        <div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">JENIS PESANAN :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" name="JenisPesanan">
                </div>


            </div>
<div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">NO PESANAN :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" name="NoPesanan">
                </div>


            </div>
     

<div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">TARIKH PESANAN :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" name="TarikhPesanan" type="date">
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
  <input type="text" name="SebutHargaId" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>
 
                </div>


            </div>
     

<div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">NAMA PELANGGAN :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" name="nama_pelanggan_step2" readonly>
                </div>


            </div>
     

<div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">ALAMAT :</label>
                </div>
                <div class="col-5">
<textarea name="alamat_pelanggan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>


            </div>
     

<div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">UNTUK PERHATIAN :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" name="UntukPerhatian">
                </div>


            </div>
     
<div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">NO TELEFON BIMBIT :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" name="no_hp" readonly>
                </div>


            </div>

<div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">NAMA PELANGGAN PENGHANTARAN :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" name="NamaPelangganPenghantaran">
                </div>


            </div>
     

     

            <br>
            <a id="step2" style="margin-left: 85%;" onclick="seterusnya_step2()" class="risda-dg btn btn-sm btn-primary">SETERUSNYA</a>
    </div>

    <div id="pesanan_step3" style="display: none;">
      <div class="card">
        <div class="card-header">
          <h4><strong>MAKLUMAT PESANAN</strong></h4>
        </div>

        <div class="card-body">
            <div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">NO PESANAN :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" name="NoPesanan" readonly>
                </div>


            </div>

            <div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">NO SEBUTHARGA :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" name="NoSebutHarga" readonly>
                </div>


            </div>

            <div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">NAMA PELANGGAN :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" name="NamaPelanggan" readonly>
                </div>


            </div>

        </div>
      </div>
      
      <div class="card mt-3">
        <div class="card-header">
          <h4><strong>MAKLUMAT SEBUTHARGA</strong></h4>
        </div>

        <div class="card-body">
            <table id="infoTable2" class="table table-fixed table-condensed">
                        <thead>
                        <tr>
                            <th class="col-xs-1">BIL.</th>
                            <th class="col-xs-3">KHIDMAT/PRODUK</th>
                            <th class="col-xs-6">AMAUN</th>
                            <th class="col-xs-6">JUMLAH</th>

                        </tr>
                        </thead>
                        <tbody id="tbody2_step3">
                        </tbody>
                </table>

        </div>

      </div>
       <div class="row mt-3 justify-content-center">

                <div class="col-6">
                    <label class="col-form-label">JUMLAH :</label>
                </div>
                <div class="col-5">
                    <input class="form-control" name="jumlah_pesanan" readonly>
                </div>


            </div>


<br>
            <a id="step2" style="margin-left: 85%;" href="" class="risda-dg btn btn-sm btn-primary">HANTAR PENGESAHAN</a>

    </div>


    
    </div>



    <script type="text/javascript">
      var selected_sebutharga = {};
      var selected_pesanan = {};

      function clickCarian() {
        let sebut_harga_id = $("input[name=no_sebutharga]").val();
          $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'get',
            url: '/sebutharga/' + sebut_harga_id,
            success: function(res){
              $("#sebutHargaTableDiv").show();
              if (res.length < 1) {
              }
              else {
                res = res[0];
                selected_sebutharga = res;
                console.log(res);
                let table_data = `
                    <tr class="clickableRow" onclick="step2()">
                            <td class="col-xs-3">1</td>
                            <td class="col-xs-6">${res.pelanggan.name}</td>
                            <td class="col-xs-6">NM/QUO/${sebut_harga_id}</td>

                        </tr>
                `;

                $("#tbody2").html(table_data);
              }
            }
        });



      }

      function step2() {
        $("#pesanan_step1").hide();
        $("#pesanan_step2").show();
        $("#step2_header").show();

        $("input[name=nama_pelanggan_step2]").val(selected_sebutharga.pelanggan.name)
        $("input[name=SebutHargaId]").val(selected_sebutharga.id)
        $("input[name=no_hp]").val(selected_sebutharga.NoHp)
      }

      function seterusnya_step2() {
        let obj = {};
        var i = $("#pesanan_step2  :input");
        for(let j=0; j < i.length; j++) {
          let key = $(i[j]).attr("name");
          let val = $(i[j]).val()
          obj[key] = val;
        }
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: '/pesanan',
            data: obj,
            success: function(res){
                console.log("res2",res);
                selected_pesanan = res;

                $("#pesanan_step2").hide();
                $("#pesanan_step3").show();
                $("#step3_header").show();

                $("input[name=NoPesanan]").val(selected_pesanan.NoPesanan)
                $("input[name=NoSebutHarga]").val("NM/QUO/" +selected_sebutharga.id)
                $("input[name=NamaPelanggan]").val(selected_sebutharga.pelanggan.name)

                let table_data = "";
                let jumlah = 0;
                for(let i=0; i<selected_sebutharga.sebut_harga_item.length; i++) {
                            table_data = table_data + `<tr>
                                <td class="col-xs-3" >${i+1}</td>
                                <td class="col-xs-3" >${selected_sebutharga.sebut_harga_item[i].NamaKhidmat}</td>
                                <td class="col-xs-3" >${selected_sebutharga.sebut_harga_item[i].KuantitiProduk}</td>
                                <td class="col-xs-3" >${selected_sebutharga.sebut_harga_item[i].KuantitiProduk * selected_sebutharga.sebut_harga_item[i].AmaunProduk}</td>
                            </tr>`;

                            jumlah = jumlah + selected_sebutharga.sebut_harga_item[i].KuantitiProduk * selected_sebutharga.sebut_harga_item[i].AmaunProduk;
                        }
                

                $("#tbody2_step3").html(table_data);
                $("input[name=jumlah_pesanan]").val(jumlah);

            }
        });

        
      }

      function finish_him() {
        window.locatio.reload();
      }

    </script>


@endsection
