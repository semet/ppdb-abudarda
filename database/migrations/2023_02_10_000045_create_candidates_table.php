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
        Schema::create('candidates', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('no_induk_asal');
            $table->string('nisn');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('agama');
            $table->integer('anak_ke');
            $table->enum('status_dalam_keluarga', ['Anak kandung', 'Anak angkat', 'lainnya']);
            $table->string('alamat');
            $table->string('sekolah_asal');
            $table->string('alamat_sekolah_asal');
            $table->boolean('ditetima')->default(false);
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
        Schema::dropIfExists('candidates');
    }
};
