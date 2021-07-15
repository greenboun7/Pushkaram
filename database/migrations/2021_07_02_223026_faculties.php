<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Faculties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->bigIncrements('fact_id');
            $table->integer('fact_dept_id');
            $table->string("fact_name");
            $table->text("fact_image");
            $table->text("fact_desc");
            $table->string("fact_designation");
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
        Schema::dropIfExists('faculties');
    }
}
