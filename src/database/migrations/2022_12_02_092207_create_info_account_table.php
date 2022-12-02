<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_account', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned();
            $table->string('name')->nullable(true);
            $table->integer('age')->nullable(true);
            $table->string('address')->nullable(true);
            $table->timestamps();
            $table->foreign('id')->references('id')->on('account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_account');
    }
}
