<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTokenResetPasswordUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint  $table){
            $table->string('token_reset_password')->nullable();
        });

        Schema::table('users', function (Blueprint  $table){
            $table->string('token_verify')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('users', function (Blueprint  $table){
            $table->dropColumn('token_reset_password');
            $table->dropColumn('token_verify');
        });
    }
}
