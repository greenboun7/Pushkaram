<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EventPartner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_partners', function (Blueprint $table) {
            $table->bigIncrements('event_part_id');
            $table->string("event_part_name");
            $table->text("event_part_link")->default("#");
            $table->text("event_part_image");
            $table->integer("display_order")->default("0");
            $table->tinyInteger("active")->default("1");
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
        Schema::dropIfExists('event_partners');
    }
}
