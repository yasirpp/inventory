<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->increments('id');
            $table->string("supplier_name", 100)->nullable();
            $table->string("contact", 150)->nullable();
            $table->string("email", 150)->nullable();
            $table->string("bank", 50)->nullable();
            $table->string('account_no', 100)->nullable();
            $table->double('balance')->double(0.0);
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
