<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datamobil extends Model
{
 protected $table = "datamobils";

 protected $fillable = [
    'id_pinjam',
    'merek',
    'model',
    'tahun_buat'
    ,'stock'
   ];

 public function datapelanggan()
 {
    return $this->hashMany(datapelanggan::class);
 }
}
