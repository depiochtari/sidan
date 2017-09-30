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
<<<<<<< HEAD
			$table->string('nama_nelayan');
            $table->string('alamat');
=======
            $table->string('nama');
			$table->string('alamat');
>>>>>>> 8b63d6738d2149a2f9856ce3e11c417fae677d11
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
