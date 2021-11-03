<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->unsignedInteger('internID');
            $table->string('level');
            $table->string('programName');
            $table->string('nameOfInstitution');
            $table->string('major');
            $table->string('completionDate');
            $table->string('Certificate');
            $table->string('academicTranscript');
            $table->foreign('internID')->references('omangID')->on('interns')->onDelete('cascade');
            $table->primary(['internID','Level','programName']);
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
        Schema::dropIfExists('education');
    }
}
