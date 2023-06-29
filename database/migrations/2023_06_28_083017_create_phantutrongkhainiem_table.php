<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhantutrongkhainiemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phantutrongkhainiem', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('khainiem_id');
            $table->unsignedBigInteger('doituong_id');
 
            $table->foreign('khainiem_id')->references('id')->on('khainiem');
            $table->foreign('doituong_id')->references('id')->on('doituong');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phantutrongkhainiem');
    }
}
