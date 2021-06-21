<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NaplataIZaduzenjaKolicina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('naplata', function (Blueprint $table) {
            $table->integer('kolicina');
        });
        Schema::table('zaduzivanje', function (Blueprint $table) {
            $table->integer('kolicina');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('naplata', function (Blueprint $table) {
            $table->dropColumn('kolicina');
        });
        Schema::table('zaduzivanje', function (Blueprint $table) {
            $table->dropColumn('kolicina');
        });
    }
}
