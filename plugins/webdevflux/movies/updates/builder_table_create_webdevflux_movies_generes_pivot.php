<?php namespace Webdevflux\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWebdevfluxMoviesGeneresPivot extends Migration
{
    public function up()
    {
        Schema::create('webdevflux_movies_generes_pivot', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id');
            $table->integer('genre_id');
            $table->primary(['movie_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('webdevflux_movies_generes_pivot');
    }
}
