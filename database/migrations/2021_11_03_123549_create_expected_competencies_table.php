<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpectedCompetenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expected_competencies', function (Blueprint $table) {
            $table->unsignedInteger('internID');
            $table->foreign('internID')->references('omangID')->on('interns')->onDelete('cascade');
            $table->unsignedInteger('supervisorID');
            $table->foreign('supervisorID')->references('omangID')->on('supervisors')->onDelete('cascade');
            $table->string('skill');
            $table->timestamps();
            $table->primary(['internID','skill']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expected_competencies');
    }
}
