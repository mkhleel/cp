<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('work_deliveries', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('order_id');
            $table->unsignedInteger('freelancer_id');
            $table->unsignedInteger('client_id');
            $table->string('work_file')->nullable();
            $table->text('details');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('work_deliveries');
    }
};
