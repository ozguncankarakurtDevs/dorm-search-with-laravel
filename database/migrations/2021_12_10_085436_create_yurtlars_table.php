<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYurtlarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yurtlars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->double('fiyat');
            $table->string('image');
            $table->integer('yurtadiid')->nullable();
            $table->integer('kategoriid')->nullable();
            $table->integer('ozellikid')->nullable();
            $table->string('selflink');
            $table->text('bulunduguil')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yurtlars');
    }
}
