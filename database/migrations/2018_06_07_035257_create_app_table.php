<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik');
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('no_telepon');
            $table->string('email');
            $table->text('alamat_lengkap');
            $table->string('pendidikan_teakhir');
            $table->string('jabatan');
            $table->enum('bagian', ["DEVELOPMENT","OPERASIONAL","MARKETING_FINANCE"]);
            $table->enum('status', ["TETAP","KONTRAK"]);
            $table->date('tanggal_gabung');
            $table->timestamps();
            $table->engine = 'InnoDB';  
            
        });


        Schema::create('hubungan_keluarga', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pegawai_id')->nullable();
            $table->string('nama');
            $table->enum('hubungan', ["ANAK","ISTRI","SUAMI"]);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onDelete('cascade');
        });


       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hubungan_keluarga');
        Schema::dropIfExists('pegawai');
    }
}
