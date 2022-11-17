<?php
/**
 * Auto generated
 * User: rupertlustosa
 * Email: rupertlustosa@gmail.com
 * Date: 30/06/14
 * Time: 21:43
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('restrict');
            $table->string('city', 50);
            $table->float('lat', 10, 6)->nullable();
            $table->float('lng', 10, 6)->nullable();
            $table->boolean('capital')->default(false);
            /*$table->char('uf', 2);
            $table->string('start_postal_code', 9);
            $table->string('end_postal_code', 9);
            $table->string('ddd_1', 2);
            $table->string('ddd_2', 2);*/
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cities');
    }

}
