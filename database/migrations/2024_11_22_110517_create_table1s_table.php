<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable1sTable extends Migration
{
    public function up()
    {
        Schema::create('table1s', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('nilai');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('table1s');
    }
}
