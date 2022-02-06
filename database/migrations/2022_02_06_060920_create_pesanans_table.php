<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string("SebutHargaId")->nullable();
            $table->string("JenisPesanan")->nullable();
            $table->string("NoPesanan")->nullable();
            $table->string("TarikhPesanan")->nullable();
            $table->string("UntukPerhatian")->nullable();
            $table->string("NamaPelangganPenghantaran")->nullable();
            $table->string("Catatan")->nullable();
            $table->string("Tindakan")->nullable();
            $table->string("PenjanaKadKerja")->nullable();
            $table->string("StatusProforma")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
}
