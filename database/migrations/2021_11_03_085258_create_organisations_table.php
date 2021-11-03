<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisations', function (Blueprint $table) {
            $table->string('name');
            $table->string('head_of_department');
            $table->string('postal_address');
            $table->unsignedInteger('telephone');
            $table->unsignedInteger('fax');
            $table->string('physical_address');
            $table->timestamps();
            $table->primary(['name','physical_address']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organisations');
    }
}
