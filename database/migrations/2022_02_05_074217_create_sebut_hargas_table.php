<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSebutHargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sebut_hargas', function (Blueprint $table) {
            $table->id();
            $table->string("JenisMohon")->nullable();
            $table->string("Nama")->nullable();
            $table->string("NoHp")->nullable();
            $table->string("Catatan")->nullable();
            $table->string("TajukAttachment")->nullable();
            $table->string("CatatanAttachment")->nullable();
            $table->string("Attachment")->nullable();
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
        Schema::dropIfExists('sebut_hargas');
    }
}
