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
            $table->string('short_cname')->nullable();
            $table->string('ownner_cname')->nullable();
            $table->string('c_address')->nullable();
            $table->string('c_phone')->unique()->nullable();
            $table->string('c_mobile')->unique()->nullable();
            $table->string('c_fax')->unique()->nullable();
            $table->string('c_email')->unique()->nullable();
            $table->string('c_web')->nullable();
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
