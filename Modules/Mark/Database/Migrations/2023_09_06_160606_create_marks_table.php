<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("pupil_id");
            $table->bigInteger("subject_id");
            $table->bigInteger("teacher_id");
            $table->tinyInteger("mark");
            $table->text("description")->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('marks');
    }
};
