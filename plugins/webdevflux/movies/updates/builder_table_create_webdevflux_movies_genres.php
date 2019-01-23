<?php namespace Webdevflux\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebdevfluxMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('webdevflux_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('genre_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('webdevflux_movies_genres');
    }
}
