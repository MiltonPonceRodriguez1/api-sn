<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewAttributesToBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->unsignedBigInteger('banner_plan_id')->default(1)->after('user_id');
            $table->foreign('banner_plan_id')->references('id')->on('banner_plans')->onDelete('cascade');
            $table->string('company', 191)->nullable()->default(null)->after('banner_plan_id');
            $table->string('phone', 191)->nullable()->default(null)->after('company');
            $table->string('email', 191)->nullable()->default(null)->after('phone');
            $table->string('website', 191)->nullable()->default(null)->after('email');
            $table->boolean('active')->default(false)->after('banner');
            $table->dateTime('limit_date')->nullable()->default(null)->after('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->dropColumn('banner_plan_id');
            $table->dropColumn('company');
            $table->dropColumn('phone');
            $table->dropColumn('email');
            $table->dropColumn('website');
        });
    }
}
