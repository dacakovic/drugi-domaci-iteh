<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Promenaduzinenaziva extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('naplata', function (Blueprint $table) {
            $table->string('naziv', 40)->change(); // composer require doctrine/dbal
        });

        Schema::table('zaduzivanje', function (Blueprint $table) {
            $table->string('naziv', 40)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
