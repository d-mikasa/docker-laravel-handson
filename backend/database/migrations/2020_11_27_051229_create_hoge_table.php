<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHogeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoge', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps('create_date');
            $table->bigIncrements('delete_flg');
            $table->bigIncrements('its_valiavre');
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
        Schema::dropIfExists('hoge');
    }
}
