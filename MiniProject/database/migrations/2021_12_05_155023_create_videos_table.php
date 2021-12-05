<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string("title")->default("Video Title");
            $table->string("meta_description")->nullable();
            $table->string("link")->link('https://youtu.be/QSLMVtE98uE?list=RDQSLMVtE98uE');
            $table->text("body");
            $table->text('name');
            $table->integer("view")->default(0);
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
        Schema::dropIfExists('videos');
    }
}
