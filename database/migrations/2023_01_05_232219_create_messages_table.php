<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('from_id');
            $table->unsignedBigInteger('to_id');
            $table->foreign('from_id')->references('id')->on('users');
            $table->foreign('to_id')->references('id')->on('users');

            $table->foreignId('order_id')->constrained();
            $table->text('attachments')->nullable();

            $table->text('body');
            $table->tinyInteger('read')->default(0);


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
};
