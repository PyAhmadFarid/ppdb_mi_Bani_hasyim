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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->enum('jenis_pendaftaran',['baru','pindahan']);
            $table->enum('jalur_pendaftaran',['Keluarga Tidak Mampu','Prestasi','Umum']);

            $table->string('nama_asal_sekolah')->nullable();
            $table->string('alamat_asal_sekolah')->nullable();
            $table->boolean('pernah_paud')->nullable();
            $table->boolean('pernah_tk')->nullable();
            $table->string('hobi')->nullable();
            $table->string('cita_cita')->nullable();
            $table->string('nama_lengkap');
            $table->enum('jenis_kelamin',['L','P']);
            $table->string('nisn')->nullable();
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('kebutuhan_khusus')->nullable();
            $table->string('alamat_jalan');
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('dusun')->nullable();
            $table->string('desa')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten');
            $table->string('kode_pos')->nullable();
            $table->string('tempat_tinggal')->nullable();
            $table->string('nomor_hp');
            $table->string('nomor_telpon')->nullable();
            $table->string('email_pribadi')->nullable();
            $table->string('SKTM')->nullable();
            $table->string('KKS')->nullable();
            $table->string('KIP')->nullable();
            $table->string('KIS')->nullable();
            $table->string('kewarganegaraan');
            $table->string('foto')->nullable();


            $table->string('nama_ayah');
            $table->year('tahun_lahir_ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('penghasilan_bulanan_ayah')->nullable();
            $table->string('kebutuhan_khusus_ayah')->nullable();

            $table->string('nama_ibu');
            $table->year('tahun_lahir_ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('penghasilan_bulanan_ibu')->nullable();
            $table->string('kebutuhan_khusus_ibu')->nullable();

            $table->string('nama_wali')->nullable();
            $table->year('tahun_lahir_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('penghasilan_bulanan_wali')->nullable();
            $table->string('kebutuhan_khusus_wali')->nullable();

            $table->integer('tinggi_badan')->nullable();
            $table->integer('berat_badan')->nullable();
            $table->integer('jarak_kesekolah')->nullable();
            $table->integer('waktu_tempu')->nullable();
            $table->integer('jumblah_saudara')->nullable();

            $table->boolean('pernyataan');

            $table->enum('status',[0,1])->nullable();

            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
};
