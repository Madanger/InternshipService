<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->unsignedInteger('internID');
            $table->foreign('internID')->references('omangID')->on('interns')->onDelete('cascade');
            $table->date('dateofApplication');
            $table->string('reasons');
            $table->string('proposedOrganisation');
            $table->string('decision');
            $table->primary('internID');
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
        Schema::dropIfExists('transfers');
    }
}
