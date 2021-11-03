<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allocations', function (Blueprint $table) {
            $table->unsignedInteger('internID');
            $table->unsignedInteger('placementOfficerID');
            $table->string('organisation');
            $table->foreign('organisation')->references('name')->on('organisations')->onDelete('cascade');
            $table->date('start_date');
            $table->string('area/place of allocation');
            $table->dateTime('date_time');
            $table->foreign('internID')->references('omangID')->on('interns')->onDelete('cascade');
            $table->foreign('placementOfficerID')->references('omangID')->on('placementOfficers')->onDelete('cascade');
            $table->primary(['internID','start_date']);
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
        Schema::dropIfExists('allocations');
    }
}
