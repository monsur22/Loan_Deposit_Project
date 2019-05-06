<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalpurchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localpurches', function (Blueprint $table) {
            $table->increments('id');
            $table->date('purchase_date')->nullable();
            $table->integer('supplier_id')->nullable();
            $table->text('purchase_no')->nullable();
            $table->text('supplier_invoiceno')->nullable();
            $table->text('unit_type')->nullable();
            $table->text('supplier_code')->nullable();
            $table->text('stock_id')->nullable();
            $table->text('quantity')->nullable();
            $table->text('margin')->nullable();
            $table->text('sale_price')->nullable();
            $table->text('image')->nullable();
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
        Schema::dropIfExists('localpurches');
    }
}
