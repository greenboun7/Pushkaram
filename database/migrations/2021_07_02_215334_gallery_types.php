<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GalleryTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_types', function (Blueprint $table) {
            $table->bigIncrements('gallery_type_id');
            $table->string("gallery_type_name");
            $table->text("gallery_type_desc")->nullable();
            $table->integer("display_order")->default(1);
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
        Schema::dropIfExists('gallery_types');
    }
}
