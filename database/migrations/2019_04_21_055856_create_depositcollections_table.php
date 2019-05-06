<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepositcollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depositcollections', function (Blueprint $table) {
            $table->increments('id');
            $table->date('d_collection_date')->nullable();
            $table->string('d_collectin_number')->nullable();
            $table->string('d_collectin_currency')->nullable();
            $table->string('deposit_number_collection')->nullable();
            $table->string('account_number_collection')->nullable();
            $table->string('d_collection_name')->nullable();
            $table->string('d_collection_type')->nullable();
            $table->string('d_collection_amount')->nullable();
            $table->string('d_collection_note')->nullable();
            $table->date('d_c_date')->nullable();
            $table->string('d_collection_status')->nullable();
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
        Schema::dropIfExists('depositcollections');
    }
}
