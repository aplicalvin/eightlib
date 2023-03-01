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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('clasification');
            $table->string('title');
            $table->year('release_year');
            $table->year('added_year')->default(now());
            $table->string('publisher');
            $table->string('author');
            $table->longText('synopsis')->default('deskripsi belum ditulis....');
            $table->integer('remaining_books');
            $table->string('book_cover')->nullable();
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
};