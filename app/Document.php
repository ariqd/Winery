<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'cards_id',
        'ktp_karyawan',
        'ktp_wirausaha',
        'ktp_profesional',
        'penghasilan_karyawan',
        'penghasilan_wirausaha',
        'penghasilan_profesional',
        'tabungan_karyawan',
        'tabungan_wirausaha',
        'tabungan_profesional',
        'tabungan_karyawan',
        'tabungan_wirausaha',
        'tabungan_profesional',
        'izin_karyawan',
        'izin_wirausaha',
        'izin_profesional',
        'npwp_karyawan',
        'npwp_wirausaha',
        'npwp_profesional',
        'pendirian_karyawan',
        'pendirian_wirausaha',
        'pendirian_profesional',
    ];

    public function card()
    {
        return $this->belongsTo('App\Card');
    }
}
