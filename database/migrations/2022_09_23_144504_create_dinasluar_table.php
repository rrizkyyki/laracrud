<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dinasluar', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 10);
            $table->string('nama', 30);
            $table->string('kota_asal', 20);
            $table->string('st_asal', 20);
            $table->string('ket_asal', 20);
            $table->string('kota_tujuan', 20);
            $table->string('st_pulang', 20);
            $table->string('ket_pulang', 20);
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
        Schema::dropIfExists('dinasluar');
    }
};
