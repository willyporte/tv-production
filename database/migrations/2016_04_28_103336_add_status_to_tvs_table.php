<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusToTvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tvs', function (Blueprint $table) {
            $table->enum('status',['monted','unmonted'])->default('monted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tvs', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
