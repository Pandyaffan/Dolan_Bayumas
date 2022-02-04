<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->integer('pariwisata_id');
            $table->string('invoice');
            $table->string('name');
            $table->string('email');
            $table->string('telepon');
            $table->date('pesan');
            $table->enum('jk', ['laki-laki', 'perempuan']);
            $table->integer('tiket');
            $table->string('payment')->nullable();
            $table->enum('status', ['success', 'failed'])->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('pesanans');
    }
}
