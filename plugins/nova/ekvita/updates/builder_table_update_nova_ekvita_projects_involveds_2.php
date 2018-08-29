<?php namespace Nova\Ekvita\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNovaEkvitaProjectsInvolveds2 extends Migration
{
    public function up()
    {
        Schema::table('nova_ekvita_projects_involveds', function($table)
        {
            $table->boolean('is_active')->default(1);
            $table->integer('sort_order')->unsigned();
            $table->string('title')->change();
        });
    }
    
    public function down()
    {
        Schema::table('nova_ekvita_projects_involveds', function($table)
        {
            $table->dropColumn('is_active');
            $table->dropColumn('sort_order');
            $table->string('title', 191)->change();
        });
    }
}
