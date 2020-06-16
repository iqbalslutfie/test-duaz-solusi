<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consuments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('jenis_kendaraan');
            $table->string('no_polisi');
            $table->date('tgl_lahir');
            $table->char('jenis_kelamin');
            $table->string('no_hp');
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
        Schema::dropIfExists('consuments');
    }
}
