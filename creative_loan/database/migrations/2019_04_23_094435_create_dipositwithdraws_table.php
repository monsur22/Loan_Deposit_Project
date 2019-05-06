<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDipositwithdrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dipositwithdraws', function (Blueprint $table) {
            $table->increments('id');
            $table->date('d_withdraw_date')->nullable();
            $table->string('d_withdraw_number')->nullable();
            $table->string('d_withdraw_currency')->nullable();
            $table->string('deposit_number_withdraw')->nullable();
            $table->string('account_number_withdraw')->nullable();
            $table->string('d_withdraw_name')->nullable();
            $table->string('d_withdraw_type')->nullable();
            $table->string('d_withdraw_amount')->nullable();
            $table->string('d_withdraw_note')->nullable();
            $table->date('d_w_date')->nullable();
            $table->string('d_withdraw_status')->nullable();
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
        Schema::dropIfExists('dipositwithdraws');
    }
}
