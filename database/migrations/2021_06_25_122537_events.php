<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('event_id');
            $table->string("event_name");
            $table->string("event_image")->nullable();
            $table->text("event_short_content")->nullable();
            $table->longText("event_content");
            $table->text("event_tags")->nullable();
            $table->string("created_by_admin");
            $table->tinyInteger("active")->default(1);
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
        Schema::dropIfExists('events');
    }
}
