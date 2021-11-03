<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objectives', function (Blueprint $table) {
            $table->unsignedInteger('internID');
            $table->foreign('internID')->references('omangID')->on('interns')->onDelete('cascade');
            $table->unsignedInteger('supervisorID');
            $table->foreign('supervisorID')->references('omangID')->on('supervisors')->onDelete('cascade');
            $table->string('objective');
            $table->string('expectedPerformance');
            $table->timestamps();
            $table->primary(['internID','objective']);
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objectives');
    }
}
