<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('plan_id');
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
            $table->string('title', 191);
            $table->string('category', 191);
            $table->tinyText('description')->nullable()->default(null);
            $table->string('email', 191)->nullable()->default(null);
            $table->mediumText('company')->nullable()->default(null);
            $table->mediumText('images');
            $table->string('phone', 50)->nullable()->default(null);
            $table->boolean('active')->default(false);
            $table->dateTime('limit_date')->nullable()->default(null);
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
        Schema::dropIfExists('posts');
    }
}
