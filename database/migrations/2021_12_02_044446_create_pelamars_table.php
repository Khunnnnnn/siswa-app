<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamars', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelamar');
            $table->string('tgl_lahir_pelamar')->nullable();
            $table->string('email_pelamar');
            $table->string('asal_sekolah_pelamar')->nullable();
            $table->string('foto_ktm_pelamar')->nullable();
            $table->string('foto_profile_pelamar')->nullable();
            $table->string('CV_pelamar')->nullable();
            $table->string('status_pelamar')->nullable();
            $table->foreignId('id_user');
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
        Schema::dropIfExists('pelamars');
    }
}
