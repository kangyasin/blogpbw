<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('category_id')->nullable()->unsigned();
            $table->string('name');
            $table->integer('price')->default(0)->unsigned();
            $table->integer('stok')->default(0)->unsigned();
            $table->string('gambar');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('category_books');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
