<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionvouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collectionvouchers', function (Blueprint $table) {
            $table->increments('c_id');
            $table->string('c_date')->nullable();
            $table->string('c_time')->nullable();
            $table->string('c_debit_head')->nullable();
            $table->string('c_debit_belence')->nullable();
            $table->string('c_credit_head')->nullable();
            $table->string('c_credit_belence')->nullable();
            $table->string('c_des')->nullable();
            $table->string('c_amount')->nullable();
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
        Schema::dropIfExists('collectionvouchers');
    }
}
