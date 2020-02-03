<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $table = "peminjaman";
    protected $primaryKey = "id";
    protected $fillable = [
        'tgl_pinjam',
        'id_anggota',
        'id_petugas',
        'deadline',
        'denda',
    ];
    public function Anggota_model(){
        return $this->belongsTo('App\Anggota_model', 'id_anggota');
    }
    public function Petugas_model(){
        return $this->belongsTo('App\Petugas_model', 'id_petugas');
    }

    public function detail(){
      return $this->hasOne('App\detail_pinjam','id');
    }
    public $timestamps = false;
}
