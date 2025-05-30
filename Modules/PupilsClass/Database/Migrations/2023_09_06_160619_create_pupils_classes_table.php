<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pupils_classes', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('pupils_classes');
    }
};
