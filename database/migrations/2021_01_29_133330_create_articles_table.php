<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category')->default('blog');
            $table->string('title');
            $table->string('slug');
            $table->string('author');
            $table->string('description')->nullable();
            $table->string('published_on')->nullable();
            $table->text('fulltext')->nullable();
            $table->string('thumb_url')->nullable();
            $table->string('img_url')->nullable();
            $table->string('keywords')->nullable();
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
        Schema::dropIfExists('articles');
    }
}
