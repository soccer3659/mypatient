<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('tests', function(Blueprint $table) {
         $table->bigIncrements('id');
         $table->integer('patient_id');
         $table->string('name')->nullable();
         $table->string('gender')->nullable();
         $table->string('age')->nullable();
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
        Schema::dropIfExists('tests');
    }
}
