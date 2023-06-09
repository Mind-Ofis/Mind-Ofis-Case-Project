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
        Schema::dropIfExists('site_kulup_uyelikleris');
        Schema::create('site_kulup_uyelikleris', function (Blueprint $table) {
            $table->id();
            $table->string('kulupismi')->nullable();
            $table->string('indirimorani')->nullable();
            $table->string('durum')->nullable();
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
        Schema::dropIfExists('site_kulup_uyelikleris');
    }
};
