<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegimembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regimembers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reg_number')->nullable();
            $table->string('ac_number')->nullable();
            $table->string('reg_name')->nullable();
            $table->string('reg_father_name')->nullable();
            $table->string('reg_mother_name')->nullable();
            $table->date('reg_birth_date')->nullable();
            $table->string('reg_profession')->nullable();
            $table->string('reg_phone')->nullable();
            $table->text('reg_pre_adress')->nullable();
            $table->text('reg_per_adress')->nullable();
            $table->string('em_name')->nullable();
            $table->string('em_relation')->nullable();
            $table->string('em_phone')->nullable();
            $table->text('em_adress')->nullable();
            $table->string('no_name')->nullable();
            $table->string('no_relation')->nullable();
            $table->string('no_phone')->nullable();
            $table->text('no_adress')->nullable();
            $table->string('user_photo')->nullable();
            $table->string('user_nid')->nullable();
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
        Schema::dropIfExists('regimembers');
    }
}
