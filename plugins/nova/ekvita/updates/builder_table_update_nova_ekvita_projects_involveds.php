<?php namespace Nova\Ekvita\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNovaEkvitaProjectsInvolveds extends Migration
{
    public function up()
    {
        Schema::rename('nova_ekvita_project_involveds', 'nova_ekvita_projects_involveds');
        Schema::table('nova_ekvita_projects_involveds', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('title')->change();
        });
    }
    
    public function down()
    {
        Schema::rename('nova_ekvita_projects_involveds', 'nova_ekvita_project_involveds');
        Schema::table('nova_ekvita_project_involveds', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->increments('id')->unsigned()->change();
            $table->string('title', 191)->change();
        });
    }
}
