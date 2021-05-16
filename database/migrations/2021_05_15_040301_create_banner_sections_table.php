<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_sections', function (Blueprint $table) {
            $table->id();
            $table->string('bannerSectionOne');
            $table->string('bannerSectionTwo');
            $table->string('bannerSectionThree');
            $table->string('shortDesc');
            $table->string('image');
            $table->string('facebook_link');
            $table->string('linkedin_link');
            $table->string('twitter_link');
            $table->string('titleMOne');
            $table->string('titleMTwo');
            $table->string('titleMThree');
            $table->string('titleMFour');
            $table->string('titleMFive');
            $table->string('status')->default('0');
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
        Schema::dropIfExists('banner_sections');
    }
}
