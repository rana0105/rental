<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenat_name')->nullable();
            $table->string('father_hus')->nullable();
            $table->string('t_mother')->nullable();
            $table->date('t_date')->nullable();
            $table->string('t_propiter')->nullable();
            $table->string('t_address')->nullable();
            $table->string('t_phone')->nullable();
            $table->string('t_mobile')->nullable();
            $table->string('t_fax')->nullable();
            $table->string('t_web')->nullable();
            $table->boolean('condition')->nullable();
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
        Schema::dropIfExists('tenants');
    }
}
