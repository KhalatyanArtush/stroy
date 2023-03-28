<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->text('title1')->nullable();
            $table->text('title_running')->nullable();
            $table->string('image_path1')->nullable();
            $table->string('image_path2')->nullable();
            $table->string('image_path3')->nullable();
            $table->string('image_path_logo')->nullable();
            $table->text('title2')->nullable();
            $table->text('title3')->nullable();
            $table->text('text')->nullable();
            $table->string('tel')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('telegram')->nullable();
            $table->string('whatsapp')->nullable();
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
        Schema::dropIfExists('homes');
    }
}
