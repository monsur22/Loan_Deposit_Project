<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpencevouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expencevouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('e_date')->nullable();
            $table->string('e_time')->nullable();
            $table->string('e_debit_head')->nullable();
            $table->string('e_debit_belence')->nullable();
            $table->string('e_credit_head')->nullable();
            $table->string('e_credit_belence')->nullable();
            $table->string('e_des')->nullable();
            $table->string('e_amount')->nullable();
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
        Schema::dropIfExists('expencevouchers');
    }
}
