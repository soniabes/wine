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
        Schema::create('wines', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->Integer('vingate');
            $table->string('cellar');

            $table->unsignedBigInteger('id_origin');
            $table->foreign('id_origin')->references('id')->on('origins');

            $table->unsignedBigInteger('id_country');
            $table->foreign('id_country')->references('id')->on('countries');
            
            $table->unsignedBigInteger('id_category');
            $table->foreign('id_category')->references('id')->on('categories');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wines');
    }
};
