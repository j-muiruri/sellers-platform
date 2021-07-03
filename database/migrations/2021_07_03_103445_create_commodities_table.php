<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommoditiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commodities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('description', 255);
            //foreign keys
            $table->foreignId('seller_id')->constrained('users');
            
            $table->bigInteger('price');
            $table->bigInteger('minimum_amount');
            $table->enum('type', ['goods', 'services']);
            $table->json('exchange_for', 255);// key=good/service; value=goods/service id
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
        Schema::dropIfExists('commodities');
    }
}
