<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_invoices', function (Blueprint $table) {
            $table->increments('saleInvoice_id');
            $table->string('saleInvoice_no')->nullable();
            $table->string('saleInvoice_customerName')->nullable();
            $table->string('saleInvoice_customerMobile')->nullable();
            $table->string('saleInvoice_previousDue')->nullable();
            $table->date('saleInvoice_date')->nullable();
            $table->string('saleInvoice_subTotal')->nullable();
            $table->string('saleInvoice_totalCost')->nullable();
            $table->string('saleInvoice_discountType')->nullable();
            $table->string('saleInvoice_discountAmount')->nullable();
            $table->string('saleInvoice_vatAmount')->nullable();
            $table->string('saleInvoice_totalPayable')->nullable();
            $table->string('saleInvoice_paidAmount')->nullable();
            $table->string('saleInvoice_returnAmount')->nullable();
            $table->string('saleInvoice_dueAmount')->nullable();
            $table->string('saleInvoice_transactionStatus')->nullable();
            $table->string('saleInvoice_collectionType')->nullable();
            $table->string('saleInvoice_salesMan')->nullable();
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
        Schema::dropIfExists('sale_invoices');
    }
}
