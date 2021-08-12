<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('is_active')->default(1);
            $table->tinyInteger('type');
            $table->string('image',128);
            $table->string('slug', 256);
            $table->string('title_uz',128);
            $table->string('title_kuz',128);
            $table->string('title_en',128);
            $table->string('title_ru',128);
            $table->string('short_content_uz',256);
            $table->string('short_content_kuz',256);
            $table->string('short_content_en',256);
            $table->string('short_content_ru',256);
            $table->mediumText('content_uz');
            $table->mediumText('content_kuz');
            $table->mediumText('content_en');
            $table->mediumText('content_ru');
            $table->date('date');
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
        Schema::dropIfExists('posts');
    }
}
