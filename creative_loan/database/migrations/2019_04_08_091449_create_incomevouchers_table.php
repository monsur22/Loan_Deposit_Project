<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomevouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomevouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('i_voucher')->nullable();
            $table->string('i_date')->nullable();
            $table->string('i_time')->nullable();
            $table->string('i_debit_head')->nullable();
            $table->string('i_debit_belence')->nullable();
            $table->string('i_credit_head')->nullable();
            $table->string('i_credit_belence')->nullable();
            $table->string('i_des')->nullable();
            $table->string('i_amount')->nullable();
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
        Schema::dropIfExists('incomevouchers');
    }
}
