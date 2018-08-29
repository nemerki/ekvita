<?php namespace Nova\Ekvita\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNovaEkvitaClients extends Migration
{
    public function up()
    {
        Schema::create('nova_ekvita_clients', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('link')->nullable();
            $table->boolean('is_active')->default(1);
            $table->integer('sort_order')->nullable()->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nova_ekvita_clients');
    }
}
