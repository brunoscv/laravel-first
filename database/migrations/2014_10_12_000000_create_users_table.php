<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('image')->nullable();

            $table->string('document_number', 18)->nullable();
            $table->string('rg', 18)->nullable();

            $table->enum('gender', array_keys(config('enums.genders')))->nullable();
            $table->date('birth')->nullable();

            $table->string('phone1', 15)->nullable();
            $table->string('phone2', 15)->nullable();

            $table->string('onesignal_user_id')->nullable();
            $table->boolean('is_dev')->default(false);
            $table->integer('access')->default(0);
            $table->dateTime('last_login')->nullable();
            $table->rememberToken();

            include(__DIR__ . '/../i-creators-data.php');
            $table->timestamps();
            $table->softDeletes();
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
}
