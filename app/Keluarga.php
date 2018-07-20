<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;

class Keluarga extends Model{

	protected $table = 'hubungan_keluarga';
    protected $fillable = [
        'pegawai_id',
        'nama',
        'hubungan',
    ];

    public function pegawai() {
        return $this->belongsTo(Pegawai::class);
    }

}