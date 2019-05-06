<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDipositorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dipositors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('d_reg')->nullable();
            $table->string('d_acc')->nullable();
            $table->string('d_number')->nullable();
            $table->date('d_date')->nullable();
            $table->string('d_name')->nullable();
            $table->string('d_father_name')->nullable();
            $table->string('d_phone_number')->nullable();
            $table->date('d_closing_date')->nullable();
            $table->string('d_pakage')->nullable();
            $table->int('d_active_status')->nullable();

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
        Schema::dropIfExists('dipositors');
    }
}
