<?php namespace Nova\Ekvita\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNovaEkvitaEvents extends Migration
{
    public function up()
    {
        Schema::create('nova_ekvita_events', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->boolean('is_active')->default(1);
            $table->boolean('is_home')->default(0);
            $table->integer('sort_order')->nullable()->unsigned();
            $table->string('slug')->nullable();
            $table->dateTime('organized_date');
            $table->text('location');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nova_ekvita_events');
    }
}
