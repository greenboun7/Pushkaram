<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Acedemics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academics', function (Blueprint $table) {
            $table->bigIncrements('academic_id');
            $table->string("academic_name");
            $table->string("academic_image")->nullable();
            $table->longText("academic_content");
            $table->integer("display_order")->default(1);
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
        Schema::dropIfExists('academics');
    }
}
