<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserinoutrecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinoutrecords', function (Blueprint $table) {
            $table->increments('id');
            $table->string('login_time')->nullable();
            $table->string('logout_time')->nullable();
            $table->string('user_id')->nullable();
            $table->string('user_rule')->nullable();

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
        Schema::dropIfExists('userinoutrecords');
    }
}
