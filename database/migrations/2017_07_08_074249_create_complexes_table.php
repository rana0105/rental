<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complexes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('complex_name')->nullable();
            $table->string('plex_address')->nullable();
            $table->string('plex_phone')->unique()->nullable();
            $table->string('plex_mobile')->unique()->nullable();
            $table->string('plex_fax')->unique()->nullable();
            $table->string('plex_email')->unique()->nullable();
            $table->integer('company_id')->unsigned()->index()->nullable();
            $table->foreign('company_id')->references('id')->on('companies');
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
        Schema::dropIfExists('complexes');
    }
}
