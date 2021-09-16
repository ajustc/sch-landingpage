<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiograpyListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biograpy_list', function (Blueprint $table) {
            $table->bigIncrements('bl_id');
            $table->string('bl_list1');
            $table->string('bl_list2');
            $table->string('bl_list3');
            $table->string('bl_list4');
            $table->string('bl_desc');
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
        Schema::dropIfExists('biograpy_list');
    }
}