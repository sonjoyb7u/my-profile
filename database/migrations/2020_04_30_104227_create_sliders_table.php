<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('message', 30)->unique();
            $table->string('title', 80)->unique();
            $table->string('sub_title', 100)->unique();
            $table->string('image', 150)->default('slider_default.png');
            $table->dateTime('start')->default('2020-04-30 10:00:00');
            $table->dateTime('end')->default('2021-12-31 23:58:59');
            $table->string('url');
            $table->enum('status', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('sliders');
    }
}
