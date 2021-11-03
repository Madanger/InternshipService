<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefereesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referees', function (Blueprint $table) {
            $table->unsignedInteger('internID');
            $table->string('name');
            $table->string('proffesionaRelationship');
            $table->string('organisation');
            $table->string('email');
            $table->foreign('internID')->references('omangID')->on('interns')->onDelete('cascade');
            $table->primary(['internID','email']);
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
        Schema::dropIfExists('referees');
    }
}
