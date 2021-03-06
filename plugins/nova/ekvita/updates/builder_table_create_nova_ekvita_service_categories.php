<?php namespace Nova\Ekvita\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNovaEkvitaServiceCategories extends Migration
{
    public function up()
    {
        Schema::create('nova_ekvita_service_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('color_code')->nullable();
            $table->string('description')->nullable();
            $table->boolean('is_active')->default(1);
            $table->integer('sort_order')->nullable()->unsigned();
            $table->string('slug')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nova_ekvita_service_categories');
    }
}
