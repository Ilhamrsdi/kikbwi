<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanggarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanggars', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('no_induk_sanggar', 50);
            $table->string('rt', 10);
            $table->string('rw', 10);
            $table->string('dusun', 30);
            $table->string('desa', 30);
            $table->foreignId('id_kecamatan')->constrained('kecamatans');
            $table->string('kecamatan', 30);
            $table->string('kode_pos', 10);
            $table->string('lintang', 50);
            $table->string('bujur', 50);
            $table->foreignId('id_subkesenian')->constrained('sub_kesenians');
            $table->string('pembinaan_seni', 50);
            $table->string('sk_pendirian', 50);
            $table->date('tanggal_pendirian', 50);
            $table->string('status_kepemilikan', 50);
            $table->string('no_akta', 50);
            $table->date('tanggal_penetapan_notaris');
            $table->string('pejabat_pengesah_notaris', 50);
            $table->date('tanggal_penetapan_kemenkumham');
            $table->string('no_pendaftaran_kemenkumham', 50);
            $table->string('no_rekening', 50);
            $table->string('nama_bank', 50);
            $table->string('cabang_kcp_unit', 50);
            $table->string('an_rekening', 50);
            $table->string('luas_tanah_milik', 10);
            $table->string('luas_tanah_bukanmilik', 10);
            $table->string('nama_wajib_pajak', 50);
            $table->string('npwp', 50);
            $table->foreignId('id_user')->constrained('users');
            $table->string('email', 20);
            $table->string('no_tlp', 20);
            $table->string('no_fax', 20);
            $table->string('photo', 50);
            $table->enum('status', ['aktif', 'tidak aktif']);
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
        Schema::dropIfExists('sanggars');
    }
}
