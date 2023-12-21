<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_data', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->integer('order')->nullable();
            $table->string('year', 255)->nullable();
            $table->dateTime('admission_from')->nullable();
            $table->dateTime('admission_to')->nullable();
            $table->longText('admission_fee')->nullable();
            $table->json('extra')->nullable();
            $table->string('status', 255)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('class_data');
    }
}
