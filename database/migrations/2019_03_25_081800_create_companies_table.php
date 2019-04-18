<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name')->nullable();
            $table->string('company_mobile')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_website')->nullable();
            $table->text('company_address')->nullable();
            $table->string('country')->nullable();
            $table->string('currency_code')->nullable();
            $table->string('company_vat')->nullable();
            $table->string('company_image')->nullable();
          
            $table->integer('comy_userid');
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
        Schema::dropIfExists('companies');
    }
}
