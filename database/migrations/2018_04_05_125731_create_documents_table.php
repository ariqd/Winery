<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cards_id');
            $table->boolean('ktp_karyawan')->default(false);
            $table->boolean('ktp_wirausaha')->default(false);
            $table->boolean('ktp_profesional')->default(false);

            $table->boolean('penghasilan_karyawan')->default(false);
            $table->boolean('penghasilan_wirausaha')->default(false);
            $table->boolean('penghasilan_profesional')->default(false);

            $table->boolean('tabungan_karyawan')->default(false);
            $table->boolean('tabungan_wirausaha')->default(false);
            $table->boolean('tabungan_profesional')->default(false);

            $table->boolean('izin_karyawan')->default(false);
            $table->boolean('izin_wirausaha')->default(false);
            $table->boolean('izin_profesional')->default(false);

            $table->boolean('npwp_karyawan')->default(false);
            $table->boolean('npwp_wirausaha')->default(false);
            $table->boolean('npwp_profesional')->default(false);

            $table->boolean('pendirian_karyawan')->default(false);
            $table->boolean('pendirian_wirausaha')->default(false);
            $table->boolean('pendirian_profesional')->default(false);
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
        Schema::dropIfExists('documents');
    }
}
