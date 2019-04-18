<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountheadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accountheads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ah_group_name')->nullable();
            $table->string('ah_cat_name')->nullable();
            $table->string('ac_head_code')->nullable();
            $table->string('ac_head_name')->nullable();
            $table->string('acc_type_name')->nullable();
            $table->string('ah_balance')->nullable();

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
        Schema::dropIfExists('accountheads');
    }
}
