<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datapelanggan extends Model
{
 protected $table = "datapelanggan";
 protected $fillable = ['no_ktp','alamat','tanggal_lahir','no_telp','nama_pelanggan','id_pinjam','jml_pinjam'];

public function datamobils()
{
    return $this->belongsTo(datamobils::class);
}
}
