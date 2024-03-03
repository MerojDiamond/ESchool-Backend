<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("subject_id");
            $table->bigInteger("class_id");
            $table->enum("day", ["mon","tue","wed","thur","fri","sat"]);
            $table->integer("hour");
            $table->bigInteger("teacher_id");
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
};
