<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    protected $fillable = [
        "submission_id",
        "source_code",
        "channel_aplikasi",
        "coverage_area",
        "kode_sales",
        "nama",
        "nama_di_kartu",
        "ktp",
        "tgl_lahir",
        "tempat_lahir",
        "kewarganegaraan",
        "pendidikan",
        "status_tinggal",
        "alamat",
        "kota",
        "telp_rumah",
        "telp_hp",
        "email",
        "ibu",
        "npwp",
        "dikirim_dari",
        "tagihan_ke",
        "pekerjaan",
        "nama_perusahaan",
        "bidang",
        "alamat_kantor",
        "kota_kantor",
        "kode_pos_kantor",
        "telp_kantor",
        "extension",
        "jabatan",
        "bagian",
        "bekerja_sejak",
        "penghasilan",
        "nama_keluarga",
        "hubungan",
        "alamat_keluarga",
        "kota_keluarga",
        "kode_pos_keluarga",
        "telp_rumah_keluarga",
        "telp_hp_keluarga",
        "jml_pinjaman",
        "jangka",
        "peruntukan",
        "bank_loan",
        "atas_nama",
        "norek_loan",
        "cabang_loan",
    ];

    public function submission()
    {
        return $this->belongsTo('App\Submission');
    }
}
