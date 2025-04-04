<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNegerisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negeris', function (Blueprint $table) {
            $table->id();
            $table->string('Negeri')->nullable();
            $table->string('Negeri_Rkod')->nullable();
            $table->foreignId('id_utiliti')->constrained('utilitis');
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
        Schema::dropIfExists('negeris');
    }
}
