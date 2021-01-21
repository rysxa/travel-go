<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_join');
            $table->string('nama');
            $table->char('alamat');
            $table->string('kota');
            $table->integer('harga');
            $table->date('checkin');
            $table->date('checkout');
            $table->string('ukuran');
            $table->string('kamar_mandi');
            $table->string('tipe_kamar');
            $table->string('kasur');
            $table->string('tower');
            $table->integer('lantai');
            $table->integer('biaya_kebersihan');
            $table->integer('tambah_orang');

            $table->string('nama_building');
            $table->string('tipe_properti');
            $table->string('fasilitas');
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
        Schema::dropIfExists('properties');
    }
}
