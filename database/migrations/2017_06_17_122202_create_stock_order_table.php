<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("supplier_id")->nullable();
            $table->date('date');
            $table->string('status', 50)->default("yes");
            $table->double("total")->default(0.0);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
