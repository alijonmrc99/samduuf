<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('title_uz', 128);

            $table->string('title_kuz', 128);

            $table->string('title_ru', 128);

            $table->string('title_en', 128);

            $table->string('slug', 256);

            $table->string('link', 256)->nullable();

            $table->tinyInteger('parent_id')->unsigned();

            $table->tinyInteger('degree')->unsigned();

            $table->tinyInteger('priority')->unsigned();

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
        Schema::dropIfExists('menus');
    }
}
