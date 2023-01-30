<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('body');
            $table->decimal('price', 28,8)->default(0);
            $table->unsignedInteger('delivery_time')->nullable();

            $table->enum('status', ['pending', 'active', 'deleted', 'boosted', 'trending', 'featured'])->default('pending');

            $table->mediumInteger('counter_visits')->default(0);
            $table->mediumInteger('counter_impressions')->default(0);
            $table->mediumInteger('counter_sales')->default(0);
            $table->mediumInteger('counter_reviews')->default(0);
            $table->string('rating', 5)->default(0);

            $table->string('video_link', 60)->nullable();


            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('skills');
    }
};
