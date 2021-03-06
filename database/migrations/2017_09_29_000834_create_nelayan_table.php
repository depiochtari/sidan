<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNelayanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nelayan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kub_id')->unsigned();
            $table->string('kn');
            $table->string('nama');
			$table->string('alamat');
            $table->string('status');
            $table->string('nik');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('tahun');
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
        Schema::drop('nelayan');
    }
}
