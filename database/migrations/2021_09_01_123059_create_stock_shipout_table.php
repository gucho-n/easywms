<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockShipoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_shipout', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedInteger('shipout_id');
            $table->unsignedInteger('stock_id');
            $table->primary(['stock_id','shipout_id']);

            // 外部キー制約
            $table->foreign('stock_id')->references('id')->on('stocks')->onDelete('cascade');
            $table->foreign('shipout_id')->references('id')->on('shipout')->onDelete('cascade');
            });





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_shipout');
    }
}
