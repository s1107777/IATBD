<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huis', function (Blueprint $table) {
            $table->id('huis_id');
            $table->unsignedBigInteger('userOppas_id');
            $table->foreign('userOppas_id')->references('userOppas_id')->on('user_oppas');
            $table->string('straatnaam');
            $table->integer('huisnummer');
            $table->string('postcode');
            $table->string('woonplaats');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('huis', function (Blueprint $table) {
            $table->dropForeign('huis_userOppas_id_foreign');
        });
        Schema::dropIfExists('huis');
    }
}
