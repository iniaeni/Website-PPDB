<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppdbs', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->enum('jenis_kelamin', ['perempuan', 'laki_laki']);
            $table->string('nama');
            $table->string('asal_sekolah');
            $table->string('sekolah_lainnya')->nullable();
            $table->string('email');
            $table->string('no_hp');
            $table->string('no_ayah');
            $table->string('no_ibu');
            $table->string('refrensi');
            $table->string('nama_pegawai')->nullable();
            $table->string('nama_siswa')->nullable();
            $table->string('rayon')->nullable();
            $table->string('nama_alumni')->nullable();
            $table->string('tahun_lulus')->nullable();
            $table->string('nama_guru')->nullable();
            $table->string('asal_smp')->nullable();
            $table->string('no_seleksi')->nullable();
            $table->string('nama_calon')->nullable();
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
        Schema::dropIfExists('ppdbs');
    }
};
