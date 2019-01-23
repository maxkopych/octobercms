<?php namespace Webdevflux\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebdevfluxMovies extends Migration
{
    public function up()
    {
        Schema::table('webdevflux_movies_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('webdevflux_movies_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
