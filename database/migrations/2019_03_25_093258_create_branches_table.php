<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('b_id');
            $table->string('branch_name')->nullable();
            $table->string('branch_mobile')->nullable();
            $table->string('branch_email')->nullable();
            $table->text('branch_address')->nullable();
            $table->date('opening_date')->nullable();
            $table->float('opening_balance', 8,2)->nullable();
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
        Schema::dropIfExists('branches');
    }
}
