<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('l_reg')->nullable();
            $table->string('l_acc')->nullable();
            $table->string('l_number')->nullable();
            $table->date('l_date')->nullable();
            $table->string('l_name')->nullable();
            $table->string('l_father_name')->nullable();
            $table->string('l_phone_number')->nullable();
            $table->date('l_closing_date')->nullable();
            $table->string('l_pakage')->nullable();
            $table->string('l_active_status')->nullable();
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
        Schema::dropIfExists('loans');
    }
}
