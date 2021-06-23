<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUndangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('undangans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('invitation_id')->unsigned();
            $table->string('image')->nullable();
            $table->string('nama_pengantin1')->nullable();
            $table->string('nama_pengantin2')->nullable();
            $table->date('tanggal_acara')->nullable();
            $table->string('tempat_acara')->nullable();
            $table->string('salam')->nullable();
            $table->text('mukadimah')->nullable();
            $table->text('keterangan_1')->nullable();
            $table->text('keterangan_2')->nullable();
            $table->string('gambar_1')->nullable();
            $table->string('gambar_2')->nullable();
            $table->date('countdown')->nullable();
            $table->timestamps();

            $table->foreign('invitation_id')->references('id')->on('invitations')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('undangans');
    }
}
