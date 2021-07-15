<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NoticeBoard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notice', function (Blueprint $table) {
            $table->bigIncrements('notice_id');
            $table->string("notice_name");
            $table->text("notice_desc")->nullable();
            $table->text("notice_link")->default("#");
            $table->integer("display_order")->default(0);
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
        Schema::dropIfExists('notice');
    }
}
