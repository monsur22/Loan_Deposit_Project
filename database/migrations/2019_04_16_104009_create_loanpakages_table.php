<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanpakagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loanpakages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('l_pakage_name')->nullable();
            $table->string('l_currency')->nullable();
            $table->string('l_amount')->nullable();
            $table->string('l_Interest')->nullable();
            $table->string('l_total_amount')->nullable();
            $table->string('l_number_install')->nullable();
            $table->string('l_per_ins_amount')->nullable();
            $table->string('l_ins_type')->nullable();
            $table->string('l_fine_p_ins')->nullable();
            $table->date('l_date')->nullable();

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
        Schema::dropIfExists('loanpakages');
    }
}
