<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up()
    {
        Schema::create('pupils', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("class_id");
            $table->dateTime("deleted_at");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pupils');
    }
};
