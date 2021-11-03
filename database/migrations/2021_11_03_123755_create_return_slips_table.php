<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnSlipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('return_slips', function (Blueprint $table) {
            $table->unsignedInteger('internID');
            $table->foreign('internID')->references('omangID')->on('interns')->onDelete('cascade');
            $table->unsignedInteger('supervisorID');
            $table->foreign('supervisorID')->references('omangID')->on('supervisors')->onDelete('cascade');
            $table->unsignedInteger('allocationID');
            $table->timestamps();
            $table->primary(['internID','supervisorID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('return_slips');
    }
}
