<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemproducts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('item_code')->nullable();
            $table->text('barcode_code')->nullable();
            $table->string('category_name')->nullable();
            $table->string('product_name')->nullable();
            $table->string('brand_name')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('unit_type')->nullable();
            $table->string('sales_price')->nullable();
            $table->string('vat')->nullable();
            $table->string('profit')->nullable();
            $table->string('supplier_name')->nullable();
            $table->string('stock')->nullable();
            $table->string('cost_price')->nullable();
            $table->string('rack')->nullable();
            $table->string('floor')->nullable();
            $table->text('product_image')->nullable();
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
        Schema::dropIfExists('itemproducts');
    }
}
