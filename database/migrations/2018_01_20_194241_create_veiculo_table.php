<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand', 40);
            $table->string('model', 50);
            $table->string('color', 30);
            $table->integer('year');
            $table->decimal('price');
            $table->text('description')->nullable();
            $table->boolean('type');
            $table->timestamps();
        });
    }
   
    public function down()
    {
        Schema::dropIfExists('vehicle');
    }
}
