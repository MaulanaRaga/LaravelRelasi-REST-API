<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapelanggan', function (Blueprint $table) {
            $table->string('no_ktp', 100);
            $table->string('alamat', 100);
            $table->date('tanggal_lahir', 50);
            $table->string('no_telp', 100);
            $table->string('nama_pelanggan', 100);
            $table->string('id_pinjam', 100);
            $table->string('jml_pinjam', 100);
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
        Schema::dropIfExists('datapelanggan');
    }
}
