<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharewithdrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sharewithdraws', function (Blueprint $table) {
            $table->increments('id');
            $table->date('s_withdraw_date')->nullable();
            $table->string('s_withdraw_number')->nullable();
            $table->string('s_withdraw_currency')->nullable();
            $table->string('reg_number_withdraw')->nullable();
            $table->string('account_number_withdraw')->nullable();
            $table->string('s_withdraw_name')->nullable();
            $table->string('s_withdraw_type')->nullable();
            $table->string('s_withdraw_amount')->nullable();
            $table->string('s_withdraw_note')->nullable();
            $table->date('s_w_date')->nullable();
            $table->string('s_withdraw_status')->nullable();
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
        Schema::dropIfExists('sharewithdraws');
    }
}
