<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatamobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datamobils', function (Blueprint $table) {
            $table->id('id_pinjam');
            $table->string('merek', 100);
            $table->string('model', 100);
            $table->date('tahun_buat', 100);
            $table->string('stock', 100);
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
        Schema::dropIfExists('datamobils');
    }
}
