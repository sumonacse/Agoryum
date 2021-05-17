<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Worked extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('worked', function (Blueprint $table) {
          $table->id();
          $table->string('worked_title');
          $table->string('worked_desc');
          $table->string('worked_image');
          $table->string('worked_name');
          $table->string('worked_budget');
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
        Schema::dropIfExists('worked');
    }
}
