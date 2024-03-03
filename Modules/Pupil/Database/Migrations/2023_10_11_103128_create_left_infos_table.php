<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up()
    {
        Schema::create('left_infos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("pupil_id");
            $table->string("to");
            $table->date("date");
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('left_infos');
    }
};
