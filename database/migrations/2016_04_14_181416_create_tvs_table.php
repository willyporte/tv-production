<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tvs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand');
            $table->string('panel');
            $table->boolean('available');
            $table->string('panel_place');
            $table->string('main');
            $table->integer('main_nr')->unsigned();
            $table->string('inverter');
            $table->integer('inverter_nr')->unsigned();
            $table->string('power_supply');
            $table->integer('power_supply_nr')->unsigned();
            $table->string('power_supply_alt');
            $table->integer('power_supply_alt_nr')->unsigned();
            $table->string('t_con');
            $table->integer('t_con_nr')->unsigned();
            $table->string('mod_tv');
            $table->integer('mod_tv_nr')->unsigned();
            $table->text('note');
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
        Schema::drop('tvs');
    }
}
