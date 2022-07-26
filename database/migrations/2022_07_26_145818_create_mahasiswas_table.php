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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->integer('ID');
            $table->text('NAMA');
            $table->text('JENIS_KELAMIN');
            $table->text('FAKULTAS');
            $table->text('JENJANG');
            $table->text('PRODI');
            $table->text('JALUR');
            $table->text('UKURAN_JAKET');
            $table->integer('UKURAN_MUTZ');
            $table->text('JADWAL_PENGAMBILAN');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
};
