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
            $table->bigincrements('id');
            $table->unsignedBigInteger('district_id');
            $table->integer('new_cases')->default(0);
            $table->integer('total_cases')->default(0);
            $table->integer('deaths')->default(0);
            $table->integer('recovered')->default(0);
            $table->integer('pcr')->default(0);
            $table->integer('oberve')->default(0);
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
