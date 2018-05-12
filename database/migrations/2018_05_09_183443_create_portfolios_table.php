<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo', 255);
            $table->string('name', 255);
            $table->text('description');
            $table->string('street', 255);
            $table->string('housenumber', 255);
            $table->string('postal_code', 255);
            $table->string('country', 255);
            $table->string('phone', 255);
            $table->string('email', 255);
            $table->string('external', 255);

            $table->boolean('subscription');
            $table->string('layout', 1);

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
        Schema::dropIfExists('portfolios');
    }
}
