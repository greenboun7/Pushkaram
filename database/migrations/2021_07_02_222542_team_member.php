<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TeamMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_member', function (Blueprint $table) {
            $table->bigIncrements('team_id');
            $table->string("team_name");
            $table->text("team_image");
            $table->text("team_desc")->nullable();
            $table->text("team_designation");
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
        Schema::dropIfExists('team_member');
    }
}
