<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasisTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasis', function (Blueprint $table) {
            $table->id('id');
            $table->integer('No');
            $table->string('Fakultas');
            $table->string('Prodi');
            $table->string('Kelas');
            $table->string('Keterangan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('informasis');
    }
}
