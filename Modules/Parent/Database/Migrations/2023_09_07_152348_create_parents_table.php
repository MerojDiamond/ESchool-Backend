<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("pupil_id");
            $table->string("work")->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parents');
    }
};
