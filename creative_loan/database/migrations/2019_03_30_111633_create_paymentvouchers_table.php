<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentvouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentvouchers', function (Blueprint $table) {
            $table->increments('p_id');
            $table->string('p_date')->nullable();
            $table->string('p_time')->nullable();
            $table->string('p_debit_head')->nullable();
            $table->string('p_debit_belence')->nullable();
            $table->string('p_credit_head')->nullable();
            $table->string('p_credit_belence')->nullable();
            $table->string('p_des')->nullable();
            $table->string('p_amount')->nullable();
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
        Schema::dropIfExists('paymentvouchers');
    }
}
