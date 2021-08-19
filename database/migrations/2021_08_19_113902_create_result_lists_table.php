<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_lists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('shipto');
            $table->string('items');
            $table->integer('cases');
            $table->string('locationfrom');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('result_lists');
    }
}
