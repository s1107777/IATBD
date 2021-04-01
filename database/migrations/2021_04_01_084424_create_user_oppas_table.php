<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserOppasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_oppas', function (Blueprint $table) {
            $table->id('userOppas_id');
            $table->string('naam');
            $table->integer('leeftijd');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('role');
            $table->foreign('role')->references('role')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_oppas', function (Blueprint $table) {
            $table->dropForeign('user_oppas_role_foreign');
        });
        Schema::dropIfExists('user_oppas');
    }
}
