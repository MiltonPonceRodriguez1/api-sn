<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsOnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname', 191)->after('name');
            $table->string('nickname', 60)->after('surname');
            $table->string('gender', 30)->after('password');
            $table->string('phone', 50)->after('gender');
            $table->string('avatar', 191)->after('phone')->default('default.png');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('nickname');
            $table->dropColumn('gender');
            $table->dropColumn('phone');
            $table->dropColumn('avatar');
        });
    }
}
