<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota_model extends Model
{
    protected $table='anggota';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable = [
        // 'id_produk',
        'nama_anggota',
        'alamat',
        'telp'
    ];
    public function anggota(){
        return $this->belongsTo('App\Anggota','id');
    }

}
