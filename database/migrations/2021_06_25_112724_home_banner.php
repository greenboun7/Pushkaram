<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HomeBanner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_banners', function (Blueprint $table) {
            $table->bigIncrements('banner_id');
            $table->string("banner_img");
            $table->string("banner_title")->nullable();
            $table->text("banner_desc")->nullable();
            $table->string("banner_read_more")->nullable();
            $table->string("banner_read_more_link")->nullable();
            $table->integer("banner_order")->unique()->nullable();
            $table->tinyInteger("active")->default(1);
            $table->string("created_by_admin");
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
        Schema::dropIfExists('home_banners');
    }
}
