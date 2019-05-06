<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharecollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sharecollections', function (Blueprint $table) {
            $table->increments('id');
            $table->date('s_collection_date')->nullable();
            $table->string('s_collectin_number')->nullable();
            $table->string('s_collectin_currency')->nullable();
            $table->string('reg_number_collection')->nullable();
            $table->string('account_number_collection')->nullable();
            $table->string('s_collection_name')->nullable();
            $table->string('s_collection_type')->nullable();
            $table->string('s_collection_amount')->nullable();
            $table->string('s_collection_note')->nullable();
            $table->date('s_c_date')->nullable();
            $table->string('s_collection_status')->nullable();
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
        Schema::dropIfExists('sharecollections');
    }
}
