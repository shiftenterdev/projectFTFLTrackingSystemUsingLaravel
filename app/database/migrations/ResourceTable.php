<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResourceTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources',function(Blueprint $table)
        {
            $table -> increments('id');
            $table -> string('catagory_id')->nullable();
            $table -> string('user_id')->nullable();
            $table -> string('title')->nullable();
            $table -> text('summary')->nullable();
            $table -> text('file_type')->nullable();
            $table -> string('url')->nullable();
            $table -> string('date')->nullable();
            $table -> string('code')->nullable();
            $table -> string('views')->default('Just Now');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('resources');
    }

}
