<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_items', function (Blueprint $table) {
            $table->increments('saleItem_id');
            $table->string('report_stock_id')->nullable();
            $table->string('saleItem_description')->nullable();
            $table->string('saleItem_quantity')->nullable();
            $table->string('saleItem_unite_price')->nullable();
            $table->string('saleItem_discount')->nullable();
            $table->string('saleItem_total')->nullable();
            $table->string('saleInvoice_no')->nullable();
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
        Schema::dropIfExists('sale_items');
    }
}
