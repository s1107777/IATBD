<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuisdierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huisdier', function (Blueprint $table) {
            $table->id('huisdier_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('user');
            $table->string('naam');
            $table->string('soort');
            $table->string('foto');
            $table->integer('leeftijd');
            $table->date('begin_dag');
            $table->integer('aantal_dagen');
            $table->double('dagtarief', 4,2);
            $table->string('plaatsnaam');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('huisdier', function (Blueprint $table) {
            $table->dropForeign('huisdier_user_id_foreign');
        });
        Schema::dropIfExists('huisdier');
    }
}
