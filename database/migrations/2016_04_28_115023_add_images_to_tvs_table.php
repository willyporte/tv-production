<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImagesToTvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tvs', function (Blueprint $table) {
            $table->string('image_name')->unique()->nullable();
            $table->string('image_path');
            $table->string('image_thumbnail')->unique()->nullable();
            $table->string('image_thumbnail_path');
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
            $table->dropColumn('image_name');
            $table->dropColumn('image_path');
            $table->dropColumn('image_thumbnail');
            $table->dropColumn('image_thumbnail_path');
        });
    }
}
