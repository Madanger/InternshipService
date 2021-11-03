<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->unsignedInteger('internID');
            $table->foreign('internID')->references('omangID')->on('interns')->onDelete('cascade');
            $table->unsignedInteger('supervisorID');
            $table->foreign('supervisorID')->references('omangID')->on('supervisors')->onDelete('cascade');
            $table->dateTime('date_of_application');
            $table->date('leave_start');
            $table->date('leave_end');
            $table->string('reasons');
            $table->primary(['internID','date_of_application']);


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaves');
    }
}
