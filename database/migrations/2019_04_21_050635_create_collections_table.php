<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->increments('id');
            $table->date('l_collection_date')->nullable();
            $table->string('l_collectin_number')->nullable();
            $table->string('l_collectin_currency')->nullable();
            $table->string('laon_number_collection')->nullable();
            $table->string('account_number_collection')->nullable();
            $table->string('l_collection_name')->nullable();
            $table->string('l_collection_type')->nullable();
            $table->string('l_collection_amount')->nullable();
            $table->string('l_collection_note')->nullable();
            $table->date('l_c_date')->nullable();
            $table->string('l_collection_status')->nullable();


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
        Schema::dropIfExists('collections');
    }
}
