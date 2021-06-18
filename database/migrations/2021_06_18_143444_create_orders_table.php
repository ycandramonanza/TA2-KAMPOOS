<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('pembeli_id')->unsigned();
            $table->string('nama');
            $table->string('paket');
            $table->string('tempat_acara');
            $table->date('tanggal_acara');
            $table->integer('status');
            $table->timestamps();

            // $table->foreign('pembeli_id')->references('id')->on('pembelis')->onUpdate('cascade')->onDelete('cascade');
        });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
