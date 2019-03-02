<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleAndIsSubscribedToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->after('email')->default('member.png');
            $table->enum('role', ['admin', 'member', 'wholesaler', 'retailer'])->default('member');
            $table->string('first_name', 60)->nullable();
            $table->string('last_name', 60)->nullable();
            $table->string('mobile', 10)->nullable();
            $table->boolean('is_subscribed')->default(false);
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
            $table->dropColumn('avatar');
            $table->dropColumn('role');
            $table->dropColumn('is_subscribed');
        });
    }
}
