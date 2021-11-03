<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRADPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radp', function (Blueprint $table) {
            $table->unsignedInteger('internID');
            $table->string('villageName');
            $table->timestamps();
            $table->foreign('internID')->references('omangID')->on('interns')->onDelete('cascade');
            $table->primary(['internID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('r_a_d_p_s');
    }
}
