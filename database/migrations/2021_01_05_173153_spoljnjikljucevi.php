<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Spoljnjikljucevi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('zaduzivanje', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id');

            $table->foreign('student_id')->references('id')->on('student');
        });

        Schema::table('naplata', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id');

            $table->foreign('student_id')->references('id')->on('student');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('zaduzivanje', function (Blueprint $table) {
            $table->dropForeign(['student_id']);
        });

        Schema::table('naplata', function (Blueprint $table) {
            $table->dropForeign(['student_id']);
        });
    }
}
