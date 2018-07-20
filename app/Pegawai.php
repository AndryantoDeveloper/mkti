<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Keluarga;

class Pegawai extends Model{

	protected $table = 'pegawai';
    protected $fillable = [
        'nik',
        'nama',
        'tanggal_lahir',
        'tempat_lahir',
        'no_telepon',
        'email',
        'alamat_lengkap',
        'pendidikan_teakhir',
        'jabatan',
        'bagian',
        'status',
        'tanggal_gabung',
    ];

    public function keluarga() {
        return $this->hasMany(Keluarga::class);
    }



}