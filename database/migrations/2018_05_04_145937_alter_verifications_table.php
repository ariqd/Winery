<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('verifications', function (Blueprint $table) {
            $table->string('source_code');
            $table->string('channel_aplikasi');
            $table->string('coverage_area');
            $table->string('kode_sales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('verifications', function (Blueprint $table) {
            $table->dropColumn('source_code');
            $table->dropColumn('channel_aplikasi');
            $table->dropColumn('coverage_area');
            $table->dropColumn('kode_sales');
        });
    }
}
