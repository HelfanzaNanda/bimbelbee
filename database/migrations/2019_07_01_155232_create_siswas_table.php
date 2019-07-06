<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usersiswa')->unsigned();
            $table->integer('id_userbimbel')->unsigned();
            $table->text('alamat');
            $table->string('asal_sekolah', '50');
            $table->string('nama_ortu', '50');
            $table->string('nohp', '15');
            $table->string('nama', '50');
            $table->text('struck')->nullable();
            $table->enum('status',['0','1']);
            $table->timestamps();


            $table->foreign('id_usersiswa')->references('id')->on('user_siswas')->onDelete('CASCADE');
            $table->foreign('id_userbimbel')->references('id')->on('user_bimbels')->onDelete('CASCADE');
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
}
