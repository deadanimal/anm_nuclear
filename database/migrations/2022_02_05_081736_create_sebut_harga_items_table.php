<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSebutHargaItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sebut_harga_items', function (Blueprint $table) {
            $table->id();
            $table->string("SebutHargaId")->nullable();
            $table->string("PusatKhidmat")->nullable();
            $table->string("JenisKhidmat")->nullable();
            $table->string("NamaKhidmat")->nullable();
            $table->string("KuantitiProduk")->nullable();
            $table->string("AmaunProduk")->nullable();
            $table->string("status")->nullable();
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
        Schema::dropIfExists('sebut_harga_items');
    }
}
