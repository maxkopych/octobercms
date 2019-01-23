<?php namespace Webdevflux\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWebdevfluxMovies2 extends Migration
{
    public function up()
    {
        Schema::table('webdevflux_movies_', function($table)
        {
            $table->text('actors');
        });
    }
    
    public function down()
    {
        Schema::table('webdevflux_movies_', function($table)
        {
            $table->dropColumn('actors');
        });
    }
}
