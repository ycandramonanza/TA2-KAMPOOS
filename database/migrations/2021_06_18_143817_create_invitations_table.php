<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('pembeli_id')->unsigned();
            // $table->bigInteger('order_id')->unsigned();
            $table->string('nama');
            $table->timestamps();
            
            // $table->foreign('pembeli_id')->references('id')->on('pembelis')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('order_id')->references('id')->on('orders')->onUpdate('cascade')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invitations');
    }
}
