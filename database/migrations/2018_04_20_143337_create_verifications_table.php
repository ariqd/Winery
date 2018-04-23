<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('submissions_id');
            $table->string('nama');
            $table->string('nama_di_kartu');
            $table->string('ktp');
            $table->string('kewarganegaraan');
            $table->string('pendidikan');
            $table->string('status_tinggal');
            $table->text('alamat');
            $table->string('kota');
            $table->string('telp_rumah');
            $table->string('telp_hp');
            $table->string('email');
            $table->string('ibu');
            $table->string('npwp');
            $table->string('dikirim_dari');
            $table->string('tagihan_ke');
            $table->string('pekerjaan');
            $table->string('nama_perusahaan');
            $table->string('bidang');
            $table->string('alamat_kantor');
            $table->string('kota_kantor');
            $table->string('kode_pos_kantor');
            $table->string('telp_kantor');
            $table->string('extension');
            $table->string('jabatan');
            $table->string('bagian');
            $table->string('bekerja_sejak');
            $table->string('penghasilan');
            $table->string('nama_keluarga');
            $table->string('hubungan');
            $table->string('alamat_keluarga');
            $table->string('kota_keluarga');
            $table->string('kode_pos_keluarga');
            $table->string('telp_rumah_keluarga');
            $table->string('telp_hp_keluarga');
            $table->string('jml_pinjaman');
            $table->string('jangka');
            $table->string('peruntukan');
            $table->string('bank_loan');
            $table->string('atas_nama');
            $table->string('norek_loan');
            $table->string('cabang_loan');
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
        Schema::dropIfExists('verifications');
    }
}
