<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('service');
            $table->string('name');
            $table->string('city');
            $table->string('license');
            $table->date('date');
            $table->time('hour');
            $table->string('payment');
            $table->string('number_boleto')->nullable();
            $table->string('url_boleto')->nullable();
            $table->string('code_boleto')->nullable();
            $table->string('cpf');
            $table->string('cnpj')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
           
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
        Schema::dropIfExists('surveys');
    }
}
