<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained();
            $table->foreignId('skill_id')->constrained();

            $table->tinyInteger('status')->default(0);

            $table->string('subtotal_value', 20);
            $table->string('taxes_value', 20)->default(0);

            $table->string('total_value');
            $table->string('profit_value', 20);
            $table->string('commission_value')->default(0);
            $table->timestamp('expected_delivery_date')->nullable();
            $table->enum('canceled_by', ['client', 'freelancer'])->nullable();

            $table->timestamp('proceeded_at')->nullable();
            $table->timestamp('delivered_at')->nullable();
            $table->timestamp('canceled_at')->nullable();
            $table->timestamp('refunded_at')->nullable();


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
