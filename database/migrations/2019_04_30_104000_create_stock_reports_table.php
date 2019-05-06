<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->date('stockreport_date')->nullable();
            $table->string('report_supplier_id')->nullable();
            $table->string('report_purchaseno')->nullable();
            $table->text('report_stock_id')->nullable();
            $table->string('report_group')->nullable();
            $table->string('report_brand')->nullable();
            $table->string('report_category')->nullable();
            $table->string('report_description')->nullable();
            $table->integer('report_quantity')->nullable();
            $table->integer('report_cost')->nullable();
            $table->string('report_margin')->nullable();
            $table->integer('report_sales_price')->nullable();
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
        Schema::dropIfExists('stock_reports');
    }
}
