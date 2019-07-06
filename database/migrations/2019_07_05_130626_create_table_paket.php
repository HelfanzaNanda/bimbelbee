<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePaket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_userbimbel')->unsigned();
            $table->text('paket');
            $table->enum('deleted_at',['1', '0']);
            $table->timestamps();

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
        Schema::dropIfExists('pakets');
    }
}
