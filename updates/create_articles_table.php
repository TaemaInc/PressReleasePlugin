<?php namespace Mathieutanguay\Pressrelease\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('mathieutanguay_pressrelease_articles', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('category');
            $table->string('url');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mathieutanguay_pressrelease_articles');
    }
}
