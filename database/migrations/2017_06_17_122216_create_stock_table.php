<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("order_id")->nullable();
            $table->integer("product_id")->nullable();
            $table->string("status",50)->nullable();
            $table->double("quantity")->default(0.0);
            $table->double("price")->default(0.0);
            $table->double("selling_price")->default(0.0);
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
