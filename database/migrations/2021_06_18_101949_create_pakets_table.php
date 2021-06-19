<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->string('image');
            $table->string('harga');
            $table->string('harga_diskon');
            $table->string('fitur1')->nullable();
            $table->string('fitur2')->nullable();
            $table->string('fitur3')->nullable();
            $table->string('fitur4')->nullable();
            $table->string('fitur5')->nullable();
            $table->string('fitur6')->nullable();
            $table->string('fitur7')->nullable();
            $table->string('fitur8')->nullable();
            $table->string('fitur9')->nullable();
            $table->string('fitur10')->nullable();
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
        Schema::dropIfExists('pakets');
    }
}
