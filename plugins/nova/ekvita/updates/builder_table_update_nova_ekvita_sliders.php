<?php namespace Nova\Ekvita\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNovaEkvitaSliders extends Migration
{
    public function up()
    {
        Schema::table('nova_ekvita_sliders', function($table)
        {
            $table->string('title')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('link')->change();
        });
    }
    
    public function down()
    {
        Schema::table('nova_ekvita_sliders', function($table)
        {
            $table->dropColumn('title');
            $table->increments('id')->unsigned()->change();
            $table->string('link', 191)->change();
        });
    }
}
