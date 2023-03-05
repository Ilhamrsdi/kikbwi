<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarKaryasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_karyas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sanggar_id')->constrained('sanggars');
            $table->string('judul_karya', 50);
            $table->Date('tahun_diciptakan');
            $table->string('penata_tari', 30);
            $table->string('penata_rias', 30);
            $table->string('penata_musik', 30);
            $table->string('penata_busana', 30);
            $table->string('sinopsis', 300);
            $table->string('pengalaman_ditampilkan', 100);
            $table->string('dokumentasi');
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
        Schema::dropIfExists('daftar_karyas');
    }
}
