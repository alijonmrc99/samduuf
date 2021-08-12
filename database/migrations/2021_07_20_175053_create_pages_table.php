<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->integer('menu_id');
            $table->string('short_content_ru', 512)->nullable();
            $table->string('short_content_uz', 512)->nullable();
            $table->string('short_content_kuz', 512)->nullable();
            $table->string('short_content_en', 512)->nullable();
            $table->mediumText('content_ru')->nullable();
            $table->mediumText('content_uz')->nullable();
            $table->mediumText('content_kuz')->nullable();
            $table->mediumText('content_en')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
