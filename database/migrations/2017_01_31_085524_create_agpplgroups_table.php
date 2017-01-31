<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgpplgroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agpplgroups', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('Code', 10)->nullable()->unique();
            $table->string('Name', 200)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('agpplgroups');
    }
}
