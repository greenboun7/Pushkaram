<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Departments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('department_id');
            $table->string("department_name");
            $table->string("department_image")->nullable();
            $table->text("department_short_content")->nullable();
            $table->longText("department_content");
            $table->tinyInteger("is_show_homepage")->default(1);
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
        Schema::dropIfExists('departments');
    }
}
