<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGallariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallaries', function (Blueprint $table) {
            $table->id();
            $table->text('url');
            $table->text('title')->nullable();
            $table->longText('description')->nullable();
            $table->text('location')->nullable();
            $table->text('year')->nullable();
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
        Schema::dropIfExists('gallaries');
    }
}
