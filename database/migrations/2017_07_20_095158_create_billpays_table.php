<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillpaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billpays', function (Blueprint $table) {
            $table->increments('id');
            //$table->conditon('conditon')->nullable();
            $table->integer('tenant_id')->unsigned()->index()->nullable();
            $table->foreign('tenant_id')->references('id')->on('tenants');
            $table->string('shop_id')->index()->nullable();
            $table->foreign('shop_id')->references('id')->on('shops');
            $table->string('bi_amount')->nullable();
            $table->date('bi_pdate')->nullable();
            $table->string('bi_type')->nullable();
            $table->date('bi_chdate')->nullable();
            $table->string('bi_elec')->nullable();
            $table->string('bi_water')->nullable();
            $table->string('bi_gas')->nullable();
            $table->string('bi_schar')->nullable();
            $table->string('bi_tamount')->nullable();
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
        Schema::dropIfExists('billpays');
    }
}
