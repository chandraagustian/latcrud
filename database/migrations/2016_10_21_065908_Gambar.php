<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gambar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
    $table->increments('id');
            $table->string('deskripsi');
            $table->string('foto');
            $table->timestamps();
        });
    }
    public function down()
    {
         Schema::drop('foto');
    }
}
