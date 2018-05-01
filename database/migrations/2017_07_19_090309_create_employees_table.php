<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('e_name')->nullable();
            $table->string('e_father')->nullable();
            $table->string('e_hus')->nullable();
            $table->string('e_mother')->nullable();
            $table->date('date_birth')->nullable();
            $table->string('nationality')->nullable();
            $table->string('blood_g')->nullable();
            $table->string('m_status')->nullable();
            $table->string('qualification')->nullable();
            $table->string('designation')->nullable();
            $table->string('job_status')->nullable();
            $table->string('e_salary')->nullable();
            $table->string('e_mobile')->nullable();
            $table->string('e_email')->nullable();
            $table->string('join_date')->nullable();
            $table->string('pre_address')->nullable();
            $table->string('per_address')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
