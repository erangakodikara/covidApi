<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictCovidInfomationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district_covid_infomations', function (Blueprint $table) {
            $table->id();
            $table->integer('district_id')->unsigned();
            $table->integer('new_cases');
            $table->integer('total_cases');
            $table->integer('deaths');
            $table->integer('recovered');
            $table->integer('pcr');
            $table->integer('oberve');
            $table->timestamps();
            
            $table->foreign('district_id')->references('id')->on('districts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('district_covid_infomations');
    }
}
