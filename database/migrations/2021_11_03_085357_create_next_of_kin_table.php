<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNextOfKinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('next_of_kin', function (Blueprint $table) {
            $table->unsignedInteger('internID');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('correspondenceAddress');
            $table->unsignedInteger('mobile');
            $table->foreign('internID')->references('omangID')->on('interns')->onDelete('cascade');
            $table->primary(['internID','firstName','lastName']);
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
        Schema::dropIfExists('next_of_kin');
    }
}
