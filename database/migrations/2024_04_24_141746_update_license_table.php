<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('licenses', function (Blueprint $table) {
            $table->string('email')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('nomor_identitas')->nullable();
            $table->string('alamat_rumah')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->string('perkerjaan')->nullable();
            $table->string('nama_perusahaan')->nullable();
            $table->string('alamat_perusahaan')->nullable();
            $table->string('curah_hujan')->nullable();
            $table->string('profile_sungai')->nullable();
            $table->string('topografi')->nullable();
            $table->string('studi_kajian')->nullable();
            $table->string('alokasi_air')->nullable();
            $table->string('lainnya')->nullable();
            $table->string('rincian_informasi')->nullable();
            $table->string('penelitian_ta_tesis')->nullable();
            $table->string('studi_kajian_proyek')->nullable();
            $table->string('lainnya2')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
