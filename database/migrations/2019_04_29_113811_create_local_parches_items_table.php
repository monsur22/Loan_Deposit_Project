<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalParchesItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_parches_items', function (Blueprint $table) {
            $table->increments('id');
            $table->text('stock_id')->nullable();
            $table->text('purchase_no')->nullable();
            $table->text('description')->nullable();
            $table->text('quantity')->nullable();
            $table->text('cost')->nullable();
            $table->text('total_cost')->nullable();
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
        Schema::dropIfExists('local_parches_items');
    }
}
