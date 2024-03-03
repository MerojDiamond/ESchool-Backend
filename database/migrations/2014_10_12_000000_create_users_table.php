<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("user_type");
            $table->bigInteger("user_id");
            $table->enum("gender", ["male", "female"]);
            $table->string("nationality");
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('email')->unique()->nullable();
            $table->integer("phone");
            $table->string("address");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger("photo_id")->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
