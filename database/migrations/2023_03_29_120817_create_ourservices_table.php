<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ourservices', function (Blueprint $table) {
            $table->id();
            $table->string('header_title')->nullable();
            $table->string('title')->nullable();
            $table->text('text')->nullable();
            $table->string('image_path')->nullable();
            $table->string('image_text')->nullable();
            $table->string('stock')->nullable();
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
        Schema::dropIfExists('ourservices');
    }
}
