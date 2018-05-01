<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopBookingsTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('shop_bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned()->index()->nullable();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->integer('complex_id')->unsigned()->index()->nullable();
            $table->foreign('complex_id')->references('id')->on('complexes');
            $table->integer('shop_id')->unsigned()->index()->unique()->nullable();
            $table->foreign('shop_id')->references('id')->on('shops');
            $table->integer('tenant_id')->unsigned()->index()->nullable();
            $table->foreign('tenant_id')->references('id')->on('tenants');
            $table->date('book_date')->nullable();
            $table->string('rent_feet')->nullable();
            $table->string('total_rent')->nullable();
            $table->string('secu_money')->nullable();
            $table->string('adv_money')->nullable();
            $table->string('adv_refund')->nullable();
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
        Schema::dropIfExists('shop_bookings');
    }
}
