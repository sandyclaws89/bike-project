<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bikes', function (Blueprint $table) {
            $table->id();
            $table->string('image', 250);
            $table->string('post_title', 250)->nullable();
            $table->string('bike_name', 250);
            $table->text('description')->nullable();;
            $table->char('price');
            $table->string('brand', 150)->nullable();
            $table->string('model', 150)->nullable();
            $table->date('year')->nullable();
            $table->string('type', 250);
            $table->boolean('available')->nullable()->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bikes');
    }
}
