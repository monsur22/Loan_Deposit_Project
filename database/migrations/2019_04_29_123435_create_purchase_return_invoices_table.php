<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseReturnInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_return_invoices', function (Blueprint $table) {
            $table->increments('purchaseReturnInvoice_id');
            $table->date('PurchaseReturnDate');
            $table->date('PurchaseReturnNo');
            $table->date('StockId');
            $table->date('purchaseReturn_qty');
            $table->date('purchaseReturn_total');
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
        Schema::dropIfExists('purchase_return_invoices');
    }
}
