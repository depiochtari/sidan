<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAhliWarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ahli_waris', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nelayan_id')->unsigned();
            $table->string('nama');
            $table->string('nik');
            $table->string('alamat');
            $table->string('status');
            $table->string('hp');
            $table->string('bank');
            $table->string('norek');
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
        Schema::drop('ahli_waris');
    }
}
