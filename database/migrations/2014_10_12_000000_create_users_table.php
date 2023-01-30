<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('phone')->nullable();
            $table->text('avatar')->nullable();
            $table->date('birthdate')->nullable();
            $table->text('device_token')->nullable();
            $table->string('user_type')->default('client');

            $table->text('provider', 20)->nullable();
            $table->text('provider_id')->nullable();
            $table->text('access_token')->nullable();

            $table->tinyInteger('banned')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->text('settings')->nullable();
            $table->timestamp('email_verified_at')->nullable();


            $table->text('country')->nullable();

            $table->string('balance_net', 20)->default(0);
            $table->string('balance_withdrawn', 20)->default(0);
            $table->string('balance_purchases', 20)->default(0);
            $table->string('balance_pending', 20)->default(0);
            $table->string('balance_available', 20)->default(0);

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
