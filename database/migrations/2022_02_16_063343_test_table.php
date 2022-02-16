<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('test', function(Blueprint $table) {
         $table->bigIncrements('id');
         $table->string('name');
         $table->string('gender');
         $table->integer('age');
         $table->integer('comfortable')->nullable();
         $table->integer('maximum')->nullable();
         $table->integer('distance')->nullable();
         $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test');
    }
}
