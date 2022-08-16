<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOzelliksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ozelliks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name'); //tablo sütun isimlerimiz
            $table->integer('kisisayisi');
            $table->integer('telno');
            $table->string('aciklama');
            $table->string('image');
            $table->string('selflink');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ozelliks');
    }
}
