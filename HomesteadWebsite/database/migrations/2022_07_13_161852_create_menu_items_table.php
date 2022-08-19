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
        Schema::create('menu_items', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 128);
            $table->string('description', 512);
            $table->decimal('price');
            $table->string('image');
           // $table->unsignedInteger('category_id');
            $table->foreignId('category_id')->constrained('categories')->onUpdate('cascade')->onDelete('cascade');

          //  $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_items');
    }
};
