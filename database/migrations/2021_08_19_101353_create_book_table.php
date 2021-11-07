<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // id. title, description. author. 
        // publisher. date_of_issue. create_at, update_at.
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id')->nullable()->change();;
            $table->string('title', 255);
            $table->text('description');
            $table->string('book_image');
            $table->string('publisher', 100);
            $table->integer('count_book', 3);
            $table->date('date_of_issue');
            $table->timestamps();
        });
        Schema::table('book', function ($table) {
            $table->foreign('author_id')->references('id')->on('authors')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
