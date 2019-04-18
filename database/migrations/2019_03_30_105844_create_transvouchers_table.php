<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransvouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transvouchers', function (Blueprint $table) {
            $table->increments('t_id');
            $table->string('t_date')->nullable();
            $table->string('t_time')->nullable();
            $table->string('t_debit_head')->nullable();
            $table->string('t_debit_belence')->nullable();
            $table->string('t_credit_head')->nullable();
            $table->string('t_credit_belence')->nullable();
            $table->string('t_des')->nullable();
            $table->string('t_amount')->nullable();
            
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
        Schema::dropIfExists('transvouchers');
    }
}
