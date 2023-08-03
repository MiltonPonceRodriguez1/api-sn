<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->double('price', 8, 2);
            $table->mediumText('description')->nullable()->default(null);
            $table->mediumText('benefits')->nullable()->default(null);
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
        Schema::dropIfExists('banner_plans');
    }
}
