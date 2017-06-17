<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string("serial_no", 100)->nullable();
            $table->string("product_name", 150)->nullable();
            $table->string("description", 150)->nullable();
            $table->string("model", 100)->nullable();
            $table->double('price')->default(0.0);
            $table->double('selling_price')->default(0.0);
            $table->string('store_ids', 50)->nullable();
            $table->string('stock_status', 50)->default("in_stock"); //'In Stock', 'Out of Stock', 'Pre Order' 
            $table->string('status', 50)->default("yes");
            $table->string('manufacture', 100)->nullable();
            $table->integer('category_id')->nullable();
            $table->string('rack_no', 50)->nullable();
            $table->date('expiry_date');
            $table->string('expire_status')->default("no");
            $table->string('related_products', 100)->nullable();
            $table->string('image', 100)->default("no_image.png");
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
