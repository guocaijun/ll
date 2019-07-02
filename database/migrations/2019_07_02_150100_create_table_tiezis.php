<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTiezis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiezis', function (Blueprint $table) {
        //increments string timestamps 类型
        $table->increments('id');
        $table->string('name');
        $table->string('title');
        // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         //删除表
        Schema::drop('tiezis');
    }
}
