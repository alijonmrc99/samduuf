<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('useful_sites', function (Blueprint $table) {
            $table->id();
            $table->string('url')->nullable();
            $table->string('image_path');
            $table->string('desc_uz');
            $table->string('desc_kuz');
            $table->string('desc_ru');
            $table->string('desc_en');
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('useful_sites');
    }
};
