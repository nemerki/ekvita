<?php namespace Nova\Ekvita\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNovaEkvitaProjectInvolveds extends Migration
{
    public function up()
    {
        Schema::create('nova_ekvita_project_involveds', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nova_ekvita_project_involveds');
    }
}
