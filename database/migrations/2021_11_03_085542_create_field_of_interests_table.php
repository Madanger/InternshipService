<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldOfInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields_of_interest', function (Blueprint $table) {
            $table->unsignedInteger('internID');
            $table->string('field');
            $table->string('reasons');
            $table->foreign('internID')->references('omangID')->on('interns')->onDelete('cascade');
            $table->timestamps();
            $table->primary(['internID','field']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('field_of_interests');
    }
}
