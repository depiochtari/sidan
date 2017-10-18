 <?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anak', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nama');
            $table->string('umur');
            $table->string('alamat');
            $table->string('saudara');
            $table->string('ayah');
            $table->string('ibu');
            $table->string('pendidikan');
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
        Schema::drop('anak');
    }
}
