<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcrentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acrents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('acclient_name')->nullable();
            $table->string('acshop_no')->nullable();
            $table->string('acsqu_feet')->nullable();
            $table->string('acper_rent')->nullable();
            $table->string('ac_tamount')->nullable();
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('acrents');
    }
}
