<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhainiemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khainiem', function (Blueprint $table) {
            $table->id();
            $table->string('tenkhainiem');
            $table->string('noidung');
            $table->timestamps();
            $table->unsignedBigInteger('congthuc_id');
 
            $table->foreign('congthuc_id')->references('id')->on('congthuc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khainiem');
    }
}
