<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            $table->integer('rating');
            $table->text('message')->nullable();
            $table->text('reply')->nullable();

            $table->foreignId('skill_id')->constrained();
            $table->foreignId('user_id')->constrained();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
