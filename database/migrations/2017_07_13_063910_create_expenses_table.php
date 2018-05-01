<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ex_name')->nullable();
            $table->integer('cat_id')->unsigned()->index()->nullable();
            $table->foreign('cat_id')->references('id')->on('categories');
            $table->integer('company_id')->unsigned()->index()->nullable();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->integer('complex_id')->unsigned()->index()->nullable();
            $table->foreign('complex_id')->references('id')->on('complexes');
            $table->string('ex_amount')->nullable();
            $table->date('ex_date')->nullable();
            $table->string('ex_note')->nullable();
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
        Schema::dropIfExists('expenses');
    }
}
