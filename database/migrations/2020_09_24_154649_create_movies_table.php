<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('poster')->nullable();
            $table->integer('release_year')->nullable();
            $table->string('mpaa')->nullable();
            $table->text('genre')->nullable();
            $table->integer('length')->nullable();
            $table->string('rating')->nullable();
            $table->text('description')->nullable();
            $table->string('director')->nullable();
            $table->string('writer')->nullable();
            $table->string('stars')->nullable();
            $table->string('cast')->nullable();

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
        Schema::dropIfExists('movies');
    }
}
