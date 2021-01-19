<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelephonemodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telephonemodels', function (Blueprint $table) {
            $table->id();
            $table->longText('name');
            $table->longText('cpu');
            $table->longText('gpu');
            $table->longText('memory');
            $table->longText('camera');
            $table->longText('battery');
            $table->longText('display');
            $table->integer('brand_id')->unsigned();
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
        Schema::dropIfExists('telephonemodels');
    }
}
