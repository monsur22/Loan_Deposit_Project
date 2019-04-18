<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepositpakagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depositpakages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('d_pakage_name')->nullable();
            $table->string('d_currency')->nullable();
            $table->string('d_amount')->nullable();
            $table->string('d_Interest')->nullable();
            $table->string('d_total_amount')->nullable();
            $table->string('d_number_install')->nullable();
            $table->string('d_per_ins_amount')->nullable();
            $table->string('d_ins_type')->nullable();
            $table->string('d_fine_p_ins')->nullable();
            $table->date('d_date')->nullable();
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
        Schema::dropIfExists('depositpakages');
    }
}
